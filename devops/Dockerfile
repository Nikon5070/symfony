FROM php:7.2-fpm


# RUN выполняет идущую за ней команду в контексте нашего образа.
# В данном случае мы установим некоторые зависимости и модули PHP.
# Для установки модулей используем команду docker-php-ext-install.
# На каждый RUN создается новый слой в образе, поэтому рекомендуется объединять команды.
RUN apt-get update \
    && apt-get install -y \
        git \
        zip \
        libmcrypt-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# Куда же без composer'а.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for symfony application
RUN groupadd -g 1000 www \
    && useradd -u 1000 -ms /bin/bash -g www www \
    && chmod -R 777 /var/www/
# Change current user to www
USER www

# workdir
#RUN chown -R www:www /var/www/
WORKDIR /var/www/
#COPY composer.json .
COPY --chown=www:www . .
#COPY wait-for
COPY --chown=www:www wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it

ENV APP_ENV=dev
ENV APP_SECRET=0842e8ce715642505ca2400e4308f5e4

RUN touch .env
RUN composer install

EXPOSE 9000
CMD php-fpm



