FROM php:8.0.6-fpm-alpine3.13

RUN \
    apk add --no-cache --virtual .build-deps autoconf gcc g++ make \
    && apk add --no-cache bash git icu-dev postgresql-dev \
    && docker-php-ext-install opcache pdo pdo_pgsql \
    && apk del .build-deps

COPY docker/php/php.ini /usr/local/etc/php/conf.d/sg-php-kata-dev.ini

WORKDIR /app

# ------------------------------------------- COMPOSER ------------------------------------------- #

COPY --from=composer:2.0.13 /usr/bin/composer /usr/local/bin/composer

# ------------------------------------------- SYMFONY -------------------------------------------- #

RUN \
    wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN symfony server:ca:install
