ARG PHP_VERSION=8.0
ARG UNIT_VERSION=1.23.0

FROM ubuntu:20.04 as base
ARG PHP_VERSION
ENV TZ=Europe/Budapest
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update
RUN apt-get install -y --no-install-recommends gnupg2 ca-certificates curl
RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu focal main" > /etc/apt/sources.list.d/ondrej-ubuntu-php-focal.list
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN apt-get update
RUN apt-get dist-upgrade -y
RUN apt-get install -y --no-install-recommends php${PHP_VERSION} php${PHP_VERSION}-dev php${PHP_VERSION}-curl php${PHP_VERSION}-gd php${PHP_VERSION}-mbstring php${PHP_VERSION}-imagick php${PHP_VERSION}-mysql php${PHP_VERSION}-opcache php${PHP_VERSION}-pgsql php${PHP_VERSION}-xml php${PHP_VERSION}-zip libphp${PHP_VERSION}-embed
RUN ln -s /usr/lib/libphp${PHP_VERSION}.so /usr/lib/php/${PHP_VERSION}/sapi/

FROM base as builder
ARG PHP_VERSION
ARG UNIT_VERSION
RUN apt-get install -y build-essential
RUN mkdir /tmp/unitbuild
RUN curl https://unit.nginx.org/download/unit-${UNIT_VERSION}.tar.gz | tar -xz --strip 1 -C /tmp/unitbuild
WORKDIR /tmp/unitbuild
RUN ./configure --prefix=/usr --state=/var/lib/unit --control=unix:/var/run/control.unit.sock --pid=/var/run/unit.pid --log=/var/log/unit.log --tmp=/var/tmp --tests --openssl --modules=/usr/lib/unit/modules --libdir=/usr/lib/x86_64-linux-gnu --cc-opt='-g -O2 -specs=/usr/share/dpkg/no-pie-compile.specs -fstack-protector-strong -Wformat -Werror=format-security -Wp,-D_FORTIFY_SOURCE=2 -fPIC' --ld-opt='-Wl,-Bsymbolic-functions -specs=/usr/share/dpkg/no-pie-link.specs -Wl,-z,relro -Wl,-z,now -Wl,--as-needed'
RUN ./configure php --module=php --config=/usr/bin/php-config${PHP_VERSION} --lib-path=/usr/lib/php/${PHP_VERSION}/sapi/
RUN make
RUN make install

FROM base as app
RUN mkdir -p /var/lib/unit /usr/lib/unit/modules /app
COPY --from=builder /usr/sbin/unitd /usr/sbin
COPY --from=builder /usr/lib/unit/modules/* /usr/lib/unit/modules
COPY conf.json /var/lib/unit/
CMD ["/usr/sbin/unitd", "--no-daemon"]

