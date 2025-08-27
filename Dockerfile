# Imagem base PHP com Apache
FROM php:8.2-apache

ENV DEBIAN_FRONTEND=noninteractive

# Instala extensões PHP e utilitários
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl netcat-openbsd nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Habilita mod_rewrite do Apache
RUN a2enmod rewrite

# Ajusta DocumentRoot para a pasta public do Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia o projeto para dentro do container
COPY . /var/www/html/

# Permissões iniciais
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public

# Copia e configura o entrypoint
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Define diretório de trabalho
WORKDIR /var/www/html

# Define entrypoint
ENTRYPOINT ["entrypoint.sh"]

# Expõe porta 80
EXPOSE 80
