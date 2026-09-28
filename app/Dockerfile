FROM php:8.2-apache
# Uzstādām nepieciešamos paplašinājumus datubāzes pieslēgumam
RUN docker-php-ext-install pdo pdo_mysql mysqli
# Kopējam mūsu kodu uz Apache mapi konteinerā
COPY index.php /var/www/html/