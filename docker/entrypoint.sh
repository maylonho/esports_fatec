#!/bin/sh

echo "⏳ Aguardando banco de dados em $DB_HOST:$DB_PORT..."
until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "Aguardando conexão com o banco..."
  sleep 2
done

echo "✅ Banco de dados disponível!"

# Ajusta permissões do Laravel
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependências PHP e JS
echo "📦 Instalando dependências do Composer..."
composer install --no-interaction --prefer-dist --optimize-autoloader

echo "📦 Instalando dependências do NPM..."
npm install

# Cria link simbólico do storage
php artisan storage:link || true

# Roda migrations e seeders
php artisan migrate --force
php artisan db:seed --force

# Inicia o Apache
echo "🚀 Iniciando Apache..."
apache2-foreground
