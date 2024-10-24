FROM php:8.2-apache
RUN apt-get update -y \
&& apt-get install -y libicu-dev\
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl \
&& a2enmod rewrite \
&& service apache2 restart \
&& docker-php-ext-install pdo pdo_mysql mysqli \
&& apt-get update && apt-get install -y iputils-ping && apt-get install nano -y
WORKDIR /var/www/html
COPY . .
RUN chmod 777 /var/www/html/writable/cache/ -R