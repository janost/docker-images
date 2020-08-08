FROM alpine:edge

RUN apk update && apk upgrade
RUN apk add unit unit-php7 php7-tokenizer php7-curl php7-gd php7-json php7-mbstring php7-simplexml php7-xml php7-dom php7-session php7-opcache php7-pecl-apcu php7-pdo php7-pdo_mysql php7-pdo_pgsql

CMD ["unitd", "--no-daemon", "--control", "*:8888"]