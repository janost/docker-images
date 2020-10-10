FROM janost/php-unit:1.20.0-7.4.11

RUN curl -s https://codeload.github.com/kanboard/kanboard/tar.gz/v1.2.16 | tar xz -C /app --strip=1
COPY conf.json /var/lib/unit/

CMD ["unitd", "--no-daemon"]
