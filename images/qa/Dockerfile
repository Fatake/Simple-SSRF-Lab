#Docker File by Fatake
FROM ubuntu:mantic
EXPOSE 8000

RUN export DEBIAN_FRONTEND=noninteractive && apt-get update
RUN apt-get install -y python3 curl nano iproute2 iputils-ping

ENTRYPOINT python3 -m http.server 8000 && /bin/bash