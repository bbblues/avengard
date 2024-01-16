FROM php:7.4-apache

# Habilitar o módulo mod_rewrite
RUN a2enmod rewrite

# Copiar o arquivo .htaccess
COPY .htaccess /var/www/html/.htaccess

# Restante do Dockerfile
# ...

# Certifique-se de copiar todos os outros arquivos do seu projeto, como usualmente faria.
