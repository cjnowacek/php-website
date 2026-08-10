#!/usr/bin/env bash
# deploy-play.sh — deploy ONLY the Traitors & Titans room directory (play/) to SiteGround.
#
# Deliberately narrow: this never touches the rest of the live site (no --delete at the
# site level, no other paths). Also provisions tt-data/secret.txt OUTSIDE public_html on
# first run — the shared secret that gates room registration.
#
# Usage:
#   ./deploy-play.sh                 # uses ssh alias 'siteground'
#   SG_HOST=user@host SG_PORT=18765 ./deploy-play.sh
#
# SiteGround layout assumed (matches the README's full-site deploy):
#   ~/www/cjnowacek.com/public_html   <- webroot
#   ~/www/cjnowacek.com/tt-data       <- created here; never web-served

set -euo pipefail

HOST="${SG_HOST:-siteground}"
PORT="${SG_PORT:-18765}"
REMOTE_SITE="www/cjnowacek.com"
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SSH=(ssh -p "$PORT" "$HOST")

echo "==> Deploying play/ to $HOST:$REMOTE_SITE/public_html/play/"
rsync -avzP -e "ssh -p $PORT" --delete \
  "$SCRIPT_DIR/play/" "$HOST:$REMOTE_SITE/public_html/play/"

echo "==> Ensuring tt-data + secret exist (outside public_html)"
"${SSH[@]}" "mkdir -p $REMOTE_SITE/tt-data && chmod 700 $REMOTE_SITE/tt-data"
if "${SSH[@]}" "test -s $REMOTE_SITE/tt-data/secret.txt"; then
  echo "    secret already provisioned — leaving it alone."
else
  SECRET="$(head -c 24 /dev/urandom | base64 | tr -dc 'a-zA-Z0-9' | head -c 32)"
  printf '%s' "$SECRET" | "${SSH[@]}" "cat > $REMOTE_SITE/tt-data/secret.txt && chmod 600 $REMOTE_SITE/tt-data/secret.txt"
  echo "    NEW secret provisioned. Put it in the game's net-config.json:"
  echo "    $SECRET"
fi

echo "==> Smoke test"
curl -fsS 'https://cjnowacek.com/play/api.php?action=resolve&room=ZZZZ' || true
echo
echo "==> Done. Players join at: https://cjnowacek.com/play/"
