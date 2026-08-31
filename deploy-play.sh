#!/usr/bin/env bash
# deploy-play.sh — deploy ONLY the Traitors & Titans room directory (play/) to the
# games VPS (DigitalOcean droplet, since 2026-08-12; formerly SiteGround).
#
# Deliberately narrow: syncs play/ and nothing else. The secret in /var/www/tt-data
# is provisioned once and left alone (it must keep matching the game's net-config.json).
# Full VPS provisioning (Caddy, php-fpm, frps, firewall) lives in the game repo:
#   titans-and-traitors/Server/vps-setup.sh
#
# Usage:
#   ./deploy-play.sh                    # uses VPS_HOST default
#   VPS_HOST=root@1.2.3.4 ./deploy-play.sh

set -euo pipefail

HOST="${VPS_HOST:-root@167.99.5.169}"
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "==> Deploying play/ to $HOST:/var/www/play/"
# rsync is absent from Git for Windows (2026-08-30) — scp each file instead. The play/
# directory is two small files, so losing --delete costs nothing a stale file would not
# have cost anyway; the tt-data secret lives outside this tree either way.
if command -v rsync >/dev/null 2>&1; then
  rsync -avzP --delete "$SCRIPT_DIR/play/" "$HOST:/var/www/play/"
else
  echo "    (no rsync — using scp)"
  scp "$SCRIPT_DIR/play/"* "$HOST:/var/www/play/"
fi
ssh "$HOST" 'chown -R www-data:www-data /var/www/play'

echo "==> Ensuring tt-data + secret exist (outside webroot)"
ssh "$HOST" 'mkdir -p /var/www/tt-data'
if ssh "$HOST" 'test -s /var/www/tt-data/secret.txt'; then
  echo "    secret already provisioned — leaving it alone."
else
  SECRET="$(head -c 24 /dev/urandom | base64 | tr -dc 'a-zA-Z0-9' | head -c 32)"
  printf '%s' "$SECRET" | ssh "$HOST" 'cat > /var/www/tt-data/secret.txt && chmod 600 /var/www/tt-data/secret.txt'
  echo "    NEW secret provisioned. Put it in the game's net-config.json:"
  echo "    $SECRET"
fi
ssh "$HOST" 'chown -R www-data:www-data /var/www/tt-data'

echo "==> Smoke test"
# ZZZZ is deliberately absent, so a 404 with {"ok":false} IS the healthy answer — the
# point is that PHP ran and answered as itself. -f made curl shout about it every deploy.
curl -sS 'https://play.cjnowacek.com/api.php?action=resolve&room=ZZZZ' || true
echo
echo "==> Done. Players join at: https://play.cjnowacek.com/"
