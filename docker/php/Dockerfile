# docker/php/Dockerfile
ARG PHP_VERSION
FROM php:${PHP_VERSION}

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y libpq-dev

# Instalar extensões PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli pdo_pgsql pgsql
