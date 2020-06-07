FROM mozilla/syncserver:latest

USER root

WORKDIR /app

RUN apk add postgresql-dev gcc musl-dev libpq
RUN pip install psycopg2
RUN apk del postgresql-dev gcc musl-dev

USER app

ENTRYPOINT ["/usr/bin/dumb-init", "/app/docker-entrypoint.sh"]
CMD ["server"]
