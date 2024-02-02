FROM wordpress:apache

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update -qq && \
    apt-get install -qy \
    git