#Docker File by Fatake
FROM ubuntu:mantic
EXPOSE 80 443

RUN export DEBIAN_FRONTEND=noninteractive && apt-get update
RUN apt-get install -y apache2 php curl nano lsof iproute2 iputils-ping

COPY ./src/utility.php /var/www/html/

RUN service apache2 start
COPY ./conf/php.ini /etc/php/8.2/apache2/


CMD service apache2 restart && tail -f /dev/null