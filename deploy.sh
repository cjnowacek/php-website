#!/usr/bin/env bash
# deploy.sh — build the Astro site and deploy dist/ to SiteGround.
#
# Protected on the server (never deleted by this script):
#   /play/                            — deployed separately by deploy-play.sh
#   /includes/contact_submissions.json — live contact-form log (server-side state)
#   /.well-known/                     — Let's Encrypt / host-managed
#
# Usage:
#   ./deploy.sh                      # uses ssh alias 'siteground'
#   SG_HOST=user@host SG_PORT=18765 ./deploy.sh

set -euo pipefail

HOST="${SG_HOST:-siteground}"
PORT="${SG_PORT:-18765}"
REMOTE="www/cjnowacek.com/public_html"
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "==> Building"
(cd "$SCRIPT_DIR" && npm run build)

echo "==> Deploying dist/ to $HOST:$REMOTE/"
rsync -avzP --delete \
  --exclude='/play/' \
  --exclude='/includes/contact_submissions.json' \
  --exclude='/.well-known/' \
  -e "ssh -p $PORT" \
  "$SCRIPT_DIR/dist/" "$HOST:$REMOTE/"

echo "==> Done"
