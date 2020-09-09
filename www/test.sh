curl -L -o /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/3.1.3.tar.gz
tar xfz /tmp/redis.tar.gz
rm -r /tmp/redis.tar.gz
mkdir -p /usr/src/php/ext
mv phpredis-3.1.3 /usr/src/php/ext/redis
docker-php-ext-install redis
