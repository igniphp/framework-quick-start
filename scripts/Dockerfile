FROM php:7.1-fpm
MAINTAINER Krac <dawid.kraczkowski@gmail.com>

RUN apt-get update

# Base php setup
RUN apt-get install -y autoconf pkg-config libssl-dev zlib1g-dev libpq-dev git libicu-dev libxml2-dev && \
    docker-php-ext-install pdo_mysql pdo_pgsql pgsql bcmath zip

# Swoole install
RUN pecl install swoole && \
    docker-php-ext-enable swoole

# Composer
RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && \
    chmod +x /usr/bin/composer
