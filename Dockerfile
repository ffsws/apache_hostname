FROM openshift/php-55-centos7:latest
MAINTAINER Florian Fröhlich

EXPOSE 80

RUN rm -f /var/www/html/index.html

ADD index.php /var/www/html/index.php
