FROM docker.io/laravelfans/laravel:8
COPY . /var/www/laravel/
RUN chown www-data:www-data -R /var/www/laravel/
