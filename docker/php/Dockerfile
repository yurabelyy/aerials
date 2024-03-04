FROM php:8.3-rc-fpm

COPY php.ini $PHP_INI_DIR/conf.d/

COPY xdebug.ini $PHP_INI_DIR/conf.d/

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli && docker-php-ext-enable pdo && docker-php-ext-enable pdo_mysql



#RUN apt-get update && apt-get install -y \
#        curl \
#        wget \
#        git \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libmcrypt-dev \
#        libpng-dev \
#    && docker-php-ext-install -j$(nproc) iconv mcrypt mbstring mysqli pdo_mysql zip \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#    && docker-php-ext-install -j$(nproc) gd

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

#рабочая директория PHP
WORKDIR /var/www/html

# Запускаем контейнер
CMD ["php-fpm"]