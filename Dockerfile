FROM mediawiki:1.42.3

# Install the required extensions
COPY --chown=www-data:www-data extensions/. /var/www/html/extensions/

