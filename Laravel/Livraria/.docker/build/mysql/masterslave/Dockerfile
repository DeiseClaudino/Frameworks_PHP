FROM alpine:latest

RUN apk update && apk add mysql mysql-client    && \
    addgroup mysql mysql                        && \
    mkdir /scripts                              && \
    rm -rf /var/cache/apk/*

ADD ./setup.sh /scripts/setup.sh
RUN chmod +x /scripts/setup.sh

ENTRYPOINT ["/bin/sh", "/scripts/setup.sh"]