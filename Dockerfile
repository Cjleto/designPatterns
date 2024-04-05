FROM php:8.3-apache

# Installa le estensioni PHP necessarie
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Abilita i moduli Apache necessari
RUN a2enmod rewrite

# Installa Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configura Xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9005" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Copia il codice del progetto nella directory di lavoro
COPY . /var/www/html/

# Copia la configurazione dei virtual host
COPY vhosts.conf /etc/apache2/sites-enabled/vhosts.conf

CMD ["apache2-foreground"]