FROM wordpress:php7.4-apache  

COPY ./wp-config.php /var/www/html/wp-config.php
COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update -qq && \
    apt-get install -qy \
    git

# conf pour les mails
RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.8.3.linux-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
ENV PATH /usr/local/go/bin:$PATH
RUN GOPATH=$HOME/go \
    PATH=$PATH:$GOROOT/bin:$GOPATH/bin \
    go get github.com/mailhog/mhsendmail
RUN ln  ~/go/bin/mhsendmail /usr/bin/mhsendmail