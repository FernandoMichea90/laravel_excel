FROM php:8-fpm
RUN apt-get update && apt-get install -y \
        iputils-ping \
        libxml2-dev \
        xvfb libfontconfig wkhtmltopdf \
        git \
	libzip-dev \
        zip \
        unzip \
        zlib1g-dev \
        libpng-dev \
        --no-install-recommends \
        cron \
        supervisor \
        libonig-dev 

RUN docker-php-ext-install pdo pdo_mysql