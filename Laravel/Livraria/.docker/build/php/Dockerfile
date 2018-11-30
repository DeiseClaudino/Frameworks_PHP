FROM php:7.2-fpm
#
RUN apt-get update && apt-get install -y libzip-dev zip unzip git librabbitmq-dev libssh-dev                            && \
    docker-php-ext-install mysqli pdo pdo_mysql bcmath sockets                                                                        && \
    pecl install zip                                                                                                    && \
    pecl install amqp                                                                                                   && \
    pecl install mongodb                                                                                                && \
    pecl install redis                                                                                                  && \
    pecl install xdebug                                                                                                 && \
    docker-php-ext-enable zip amqp xdebug redis

RUN echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                               && \
    echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                            && \
    echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                               && \
    echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                          && \
    echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer                 &&\
    chmod +x /usr/local/bin/composer

RUN useradd -ms /bin/bash dev && usermod -a -G www-data dev
USER dev
RUN composer global require hirak/prestissimo

WORKDIR /var/www