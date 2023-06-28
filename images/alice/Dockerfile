#Docker File by Fatake
FROM ubuntu:mantic

RUN export DEBIAN_FRONTEND=noninteractive && apt-get update
RUN apt-get install -y curl nano iproute2 iputils-ping

CMD tail -f /dev/null