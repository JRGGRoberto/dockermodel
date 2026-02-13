# docker/php/Dockerfile
ARG PHP_VERSION=8.2
FROM php:${PHP_VERSION}-fpm

# Instalar dependências e extensões em UMA layer
RUN apt-get update \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli \
    && rm -rf /var/lib/apt/lists/*