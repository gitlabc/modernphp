FROM php:7.1-fpm


RUN apt-get update && apt-get install -y \
    libmcrypt-dev mysql-client libmagickwand-dev git unzip --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install mcrypt pdo_mysql \
    && curl --silent --show-error https://getcomposer.org/installer | php \
    && mv /var/www/html/composer.phar /usr/local/bin/composer \
    && echo "alias phpunit='vendor/bin/phpunit --color=always'" >> ~/.bashrc
