FROM nginx/unit:1.18.0-php7.3

RUN apt-get update
RUN apt-get install -y php7.3-sqlite3 php7.3-gd php7.3-mysql php7.3-pgsql php php7.3-mbstring php7.3-json php7.3-xml
RUN mkdir /app
RUN curl -s https://codeload.github.com/kanboard/kanboard/tar.gz/v1.2.14 | tar xz -C /app --strip=1
COPY config.json /docker-entrypoint.d/

CMD ["unitd", "--no-daemon", "--control", "unix:/var/run/control.unit.sock"]
