FROM php:8.0-fpm-alpine

RUN set -ex \
    	&& apk --no-cache add postgresql-dev \
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html
