FROM mediawiki:1.42.3

# Install the required extensions
COPY --chown=www-data:www-data extensions/PluggableAuth /var/www/html/extensions/PluggableAuth
COPY --chown=www-data:www-data extensions/OpenIDConnect /var/www/html/extensions/OpenIDConnect
