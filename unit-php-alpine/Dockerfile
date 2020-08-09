FROM alpine:edge

RUN apk update && apk upgrade
RUN apk add curl unit unit-php7 php7-tokenizer php7-ctype php7-curl php7-gd php7-json php7-mbstring php7-simplexml php7-xml php7-dom php7-session php7-opcache php7-pecl-apcu php7-pdo php7-pdo_mysql php7-pdo_pgsql php7-mysqli php7-mysqlnd
RUN mkdir -p /var/lib/unit

CMD ["unitd", "--no-daemon"]