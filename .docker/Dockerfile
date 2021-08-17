# image à utiliser
FROM php:7.1-apache

# Droits d'écriture pour www-data
RUN usermod -u 1000 www-data
RUN usermod -a -G www-data www-data
RUN usermod -a -G www-data root
RUN chmod -R 777 /var/www/

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# On envoie le nom du serveur à apache, c'est avec ça que l'on appelera nos pages
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Quelques library necessaires
RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev;

# install nano
RUN apt-get install nano

# les locales, toujours utiles
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

# On copie le php.ini du repertoire actuel dans le contenaire
COPY php.ini /usr/local/etc/php/php.ini

# Création du vhost
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

# on télécharge et deplace le composer
RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

# Quelques extesnions de php utiles
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql gd opcache intl zip calendar
RUN pecl install apcu-5.1.5 && docker-php-ext-enable apcu

# Mise en forme des erreurs et var_dump()
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug 

# conf pour les mails (ne fonctionne pas en l'état)
RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.8.3.linux-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
ENV PATH /usr/local/go/bin:$PATH
RUN GOPATH=$HOME/go \
    PATH=$PATH:$GOROOT/bin:$GOPATH/bin \
    go get github.com/mailhog/mhsendmail
RUN ln  ~/go/bin/mhsendmail /usr/bin/mhsendmail

# Activation des modules php
RUN a2enmod rewrite
RUN a2enmod headers

WORKDIR /var/www/app