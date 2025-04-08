# Étape 1 : Base PHP-Apache
FROM php:8.2-apache

# Étape 2 : Variables d'environnement (nouveau format)
ENV APP_ENV=production
ENV APP_DEBUG=false

# Étape 3 : Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev \
    && docker-php-ext-install pdo_mysql zip

# Étape 4 : Configuration Apache
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Étape 5 : Déploiement de l'application
WORKDIR /var/www/html
COPY . .
RUN chown -R www-data:www-data /var/www/html \
    && composer install --no-dev --optimize-autoloader \
    && php artisan key:generate

# Étape 6 : Port et commande
EXPOSE 80
CMD ["apache2-foreground"]