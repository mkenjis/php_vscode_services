FROM debian:bullseye-slim

ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=US/Central

# INSTALL UTILITIES
RUN apt-get update \
    && apt-get install -y iputils-ping telnet curl
	
# INSTALL PHP 8.2
RUN apt-get update && apt-get -y install curl software-properties-common

RUN apt-get update && apt-get -y install lsb-release apt-transport-https ca-certificates \
    && curl -sS https://packages.sury.org/php/apt.gpg >/etc/apt/trusted.gpg.d/php.gpg \
    && sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list'

RUN apt-get update && apt-get install -y \
    php8.2-dev \
    php8.2-curl \
    php8.2-intl \
    php8.2-zip \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-pdo \
    php8.2-xml \
    php8.2-gd \
    php8.2-mbstring \
    php8.2-iconv \
    php8.2-soap

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
