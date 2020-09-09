FROM php:7.2-fpm

RUN apt-get update
RUN docker-php-ext-install mysqli
RUN curl -L -o /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/3.1.3.tar.gz \
    && tar xfz /tmp/redis.tar.gz \
    && rm -r /tmp/redis.tar.gz \
    && mkdir -p /usr/src/php/ext/redis \
    && mv phpredis-3.1.3/* /usr/src/php/ext/redis \
    && docker-php-ext-install redis

WORKDIR /var/www/html
EXPOSE 9000

#ENTRYPOINT ['php-fpm']
