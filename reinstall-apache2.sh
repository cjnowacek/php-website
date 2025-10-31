#!/usr/bin/env bash
# reinstall_apache2.sh
# Fully reset Apache2 and point localhost to this repo’s php-website directory.

set -e # Exit on error

# --- Get absolute path of this script ---
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# --- Define your site directory relative to the repo root ---
SITE_DIR="${SCRIPT_DIR}/"

# --- Confirm site directory exists ---
if [ ! -d "$SITE_DIR" ]; then
  echo "❌ Error: Expected site directory not found at $SITE_DIR"
  exit 1
fi

echo "🧹 Purging Apache2..."
sudo apt purge -y apache2 apache2-utils apache2-bin apache2.2-common || true
sudo rm -rf /etc/apache2 /var/www/html

echo "🔄 Reinstalling Apache2..."
sudo apt update -y
sudo apt install -y apache2 php libapache2-mod-php php-cli

echo "⚙️ Setting up default site..."
sudo mkdir -p /etc/apache2/sites-available

# Create new default site configuration
sudo tee /etc/apache2/sites-available/000-default.conf >/dev/null <<EOF
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot ${SITE_DIR}

    <Directory ${SITE_DIR}>
        Options -MultiViews +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    DirectoryIndex index.php index.html
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

# Ensure Apache can read your path
sudo apt install -y acl
sudo setfacl -m u:www-data:x /home || true
sudo setfacl -m u:www-data:x "$(dirname "$SITE_DIR")" || true
sudo setfacl -R -m u:www-data:rx "$SITE_DIR"

# Enable useful modules
sudo a2enmod rewrite
sudo systemctl restart apache2

echo "✅ Apache reinstalled and configured!"
echo "Visit: http://localhost/"
echo "Serving from: $SITE_DIR"

# make sure Apache uses the PHP module
#sudo a2dismod mpm_event 2>/dev/null || true
#sudo a2enmod php*
#sudo systemctl restart apache2
