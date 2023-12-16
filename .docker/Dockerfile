FROM wordpress:php7.4-apache  

# Configuration avancée
# COPY ./wp-config.php /var/www/html/wp-config.php


# Droits d'écriture pour www-data
RUN usermod -u 1000 www-data
RUN usermod -a -G www-data www-data
RUN usermod -a -G www-data root
RUN chmod -R 777 /var/www