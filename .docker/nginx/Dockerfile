FROM nginx:1.21-alpine

COPY .docker/nginx/nginx.conf  /etc/nginx/
COPY .docker/nginx/templates /etc/nginx/templates/
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

COPY public /var/www/symfony/public

EXPOSE 80
EXPOSE 443
