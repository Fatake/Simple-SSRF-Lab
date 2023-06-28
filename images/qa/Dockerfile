#Docker File by Fatake
FROM ubuntu:mantic
EXPOSE 8000

RUN export DEBIAN_FRONTEND=noninteractive && apt-get update
RUN apt-get install -y python3 curl nano iproute2 iputils-ping

RUN mkdir /web
COPY ./src/ /web

ENTRYPOINT python3 -m http.server --directory /web && /bin/bash