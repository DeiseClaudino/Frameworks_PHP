FROM php:7.2-fpm-alpine3.7

RUN apk add --update openldap-dev

RUN docker-php-ext-install ldap
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install -j$(nproc) pcntl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
