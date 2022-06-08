FROM php:8.0.0-apache

RUN docker-php-ext-install mysqli
RUN apt-get update
RUN apt-get install -y sendmail libpng-dev
RUN apt-get install -y libzip-dev
RUN apt-get install -y zlib1g-dev
RUN rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

RUN a2enmod rewrite

# Hardening apache
RUN add-apt-repository ppa:certbot/certbot
RUN apt-get update
RUN apt-get install pyton-certbot-apache
RUN apt install libapache2-mod-security2
RUN a2enmod security2
RUN mv /etc/modsecurity/modsecurity.conf-recommended etc/modsecurity/modsecurity.conf