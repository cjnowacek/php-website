<?php
// play/api.php — Traitors & Titans room directory.
//
// The GM's game (Unity NetHost) POSTs a heartbeat here: "room ABCD is reachable at
// these addresses". Players hit /play/, type the code, and get redirected to the game.
// This endpoint is a pure rendezvous — no game traffic ever flows through this server.
//
// Storage: flat JSON file in ../tt-data (OUTSIDE public_html so it is never
// web-readable and no site rsync can touch it). Registration is gated by a shared
// secret in tt-data/secret.txt, provisioned once by deploy-play.sh.

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

const ROOM_TTL_SECONDS = 180;   // three missed 60s heartbeats = room gone
const ROOM_PATTERN = '/^[A-Z2-9]{4,8}$/';

// Data lives one level above the webroot. TT_DATA_DIR overrides for local testing
// (php -S has a repo-root docroot, not a public_html).
$dataDir = getenv('TT_DATA_DIR') ?: dirname($_SERVER['DOCUMENT_ROOT']) . '/tt-data';
$roomsFile = $dataDir . '/rooms.json';
$secretFile = $dataDir . '/secret.txt';

function fail(int $status, string $msg): void
{
    http_response_code($status);
    echo json_encode(['ok' => false, 'error' => $msg]);
    exit;
}

function load_rooms(string $file): array
{
    if (!is_file($file)) return [];
    $rooms = json_decode((string)file_get_contents($file), true);
    if (!is_array($rooms)) return [];
    // Expire silently on every read — no cron on shared hosting.
    $now = time();
    foreach ($rooms as $code => $room) {
        if ($now - ($room['updated'] ?? 0) > ROOM_TTL_SECONDS) unset($rooms[$code]);
    }
    return $rooms;
}

function save_rooms(string $file, array $rooms): void
{
    // Atomic-ish write: temp file + rename, under an exclusive lock on the target.
    $tmp = $file . '.tmp';
    $fp = fopen($file, 'c');
    if ($fp === false || !flock($fp, LOCK_EX)) fail(500, 'storage unavailable');
    file_put_contents($tmp, json_encode($rooms));
    rename($tmp, $file);
    flock($fp, LOCK_UN);
    fclose($fp);
}

$action = $_GET['action'] ?? '';

if ($action === 'register') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') fail(405, 'POST required');

    if (!is_file($secretFile)) fail(503, 'directory not provisioned');
    $secret = trim((string)file_get_contents($secretFile));

    $body = json_decode((string)file_get_contents('php://input'), true);
    if (!is_array($body)) fail(400, 'bad json');
    if (!hash_equals($secret, (string)($body['secret'] ?? ''))) fail(403, 'bad secret');

    $code = strtoupper((string)($body['room'] ?? ''));
    if (!preg_match(ROOM_PATTERN, $code)) fail(400, 'bad room code');

    $port = (int)($body['port'] ?? 0);
    if ($port < 1 || $port > 65535) fail(400, 'bad port');

    // Keep only plausible private/public IPv4 strings; the GM sends its LAN addresses.
    $addrs = [];
    foreach ((array)($body['addrs'] ?? []) as $a) {
        if (is_string($a) && filter_var($a, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) $addrs[] = $a;
        if (count($addrs) >= 8) break;
    }

    // Tunnel URL (https://xxx.trycloudflare.com) — reachable from anywhere, so resolve
    // serves it first. Strictly validated: it lands in a redirect on the join page.
    $publicUrl = (string)($body['publicUrl'] ?? '');
    if ($publicUrl !== '' && !preg_match('#^https://[a-z0-9.-]+\.trycloudflare\.com/?$#', $publicUrl)) {
        $publicUrl = '';
    }

    if (!is_dir($dataDir)) mkdir($dataDir, 0700, true);
    $rooms = load_rooms($roomsFile);
    $rooms[$code] = [
        'addrs' => $addrs,
        'port' => $port,
        'publicUrl' => $publicUrl,
        // The address this heartbeat came from — the GM's public IP. Useful once the
        // GM port-forwards for true remote play; harmless (last candidate) otherwise.
        'publicIp' => $_SERVER['REMOTE_ADDR'] ?? '',
        'version' => substr((string)($body['version'] ?? ''), 0, 32),
        'updated' => time(),
    ];
    save_rooms($roomsFile, $rooms);
    echo json_encode(['ok' => true, 'room' => $code, 'ttl' => ROOM_TTL_SECONDS]);
    exit;
}

if ($action === 'resolve') {
    $code = strtoupper(trim((string)($_GET['room'] ?? '')));
    if (!preg_match(ROOM_PATTERN, $code)) fail(400, 'bad room code');

    $rooms = load_rooms($roomsFile);
    if (!isset($rooms[$code])) fail(404, 'room not found (game offline or code wrong)');

    $room = $rooms[$code];
    $urls = [];
    if (($room['publicUrl'] ?? '') !== '') $urls[] = $room['publicUrl'];
    foreach ($room['addrs'] as $a) $urls[] = "http://{$a}:{$room['port']}/";
    if ($room['publicIp'] !== '' && !in_array($room['publicIp'], $room['addrs'], true))
        $urls[] = "http://{$room['publicIp']}:{$room['port']}/";

    // NOTE: no version echo — the game's build number doubles as its GM console key
    // (2026-08-10), so resolve must not publish it. It stays stored for CJ's own eyes.
    echo json_encode(['ok' => true, 'room' => $code, 'urls' => $urls]);
    exit;
}

fail(400, 'unknown action');
