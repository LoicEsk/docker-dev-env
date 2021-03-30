FROM php:7.4-fpm

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions amqp apcu bcmath exif gd grpc imap intl ldap mcrypt opcache pdo pdo_mysql redis sockets uuid xdebug yaml zip

# on télécharge et deplace le composer
RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

# Droits d'écriture pour www-data
RUN usermod -u 1000 www-data
RUN usermod -a -G www-data www-data
RUN usermod -a -G www-data root
RUN chmod -R 777 /var/www/

# Les alias
COPY .bashrc /var/www/.bashrc
RUN chown www-data:www-data /var/www/.bashrc

WORKDIR /var/www/app