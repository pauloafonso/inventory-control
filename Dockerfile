FROM php:8.0-alpine
COPY . /var/www/inventory-control
WORKDIR /var/www/inventory-control
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \ 
  && pecl install xdebug-3.0.2 \
  && docker-php-ext-enable xdebug \
  && docker-php-ext-install mysqli pdo pdo_mysql \
  && apk del pcre-dev ${PHPIZE_DEPS}
COPY ./docker/xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini
RUN wget https://getcomposer.org/composer.phar -O /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
EXPOSE 80/tcp
ENTRYPOINT ["php", "-S", "0.0.0.0:80", "-t", "public", "public/index.php"]
