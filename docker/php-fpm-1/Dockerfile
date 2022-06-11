FROM php:8.0-fpm-alpine

WORKDIR /var/www/html

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm libpng libpng-dev\
    	&& docker-php-ext-install pdo pdo_pgsql \
        && docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer




