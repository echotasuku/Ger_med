# Usa a imagem oficial do PHP 8.2 com suporte ao Laravel
FROM php:8.2-fpm

# Instala extensões e dependências
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho no container
WORKDIR /var/www

# Copia o projeto para dentro do container
COPY . /var/www

# Instala as dependências do Laravel
RUN composer install

# Dá permissão ao diretório de cache e logs
RUN chown -R www-data:www-data /var/www/storage

EXPOSE 8000

# Comando para rodar o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
