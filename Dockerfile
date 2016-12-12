FROM debian

ENV DEBIAN_FRONTEND noninteractive
ENV APACHE_HTTPD "exec /usr/sbin/apache2"

RUN apt-get update && apt-get upgrade -y &&\
    apt-get install -y apache2 libapache2-mod-php5 &&\
    apt-get clean

RUN ln -s -f /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf &&\
    ln -s -f /etc/apache2/mods-available/php* /etc/apache2/mods-enabled/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
