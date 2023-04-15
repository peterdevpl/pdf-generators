FROM php:8.2-cli

COPY generators/php /php

RUN apt-get update && \
    apt-get install --no-install-recommends --assume-yes ca-certificates curl zip unzip libzip-dev zlib1g-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libxpm-dev libwebp-dev && \
    docker-php-ext-configure gd && \
    docker-php-ext-configure zip && \
    docker-php-ext-install gd zip

RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN useradd -ms /bin/bash docker
USER docker

WORKDIR /php
CMD ["./build.sh"]
