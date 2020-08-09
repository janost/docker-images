FROM janost/unit-php-alpine:1.18.0-7.4.9

RUN mkdir /app
RUN curl -s https://codeload.github.com/kanboard/kanboard/tar.gz/v1.2.15 | tar xz -C /app --strip=1
COPY conf.json /var/lib/unit/

CMD ["unitd", "--no-daemon"]
