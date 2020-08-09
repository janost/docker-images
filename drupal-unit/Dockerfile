FROM janost/unit-php-alpine:1.18.0-7.4.9

RUN mkdir -p /app /var/lib/unit
RUN curl -s https://ftp.drupal.org/files/projects/drupal-9.0.3.tar.gz | tar -xz --strip=1 -C /app
RUN mkdir -p /app/sites/default/files
COPY settings.php /app/sites/default/
# This is only for testing.
RUN chmod 777 /app/sites/default/files
COPY conf.json /var/lib/unit/

CMD ["unitd", "--no-daemon"]