FROM debian:buster

LABEL mdelwaul <mdelwaul@student.42.fr>

RUN apt-get update -y \
&& apt-get upgrade -y \
&& apt-get install -y mariadb-server nginx wget zip tar \
php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline php7.3-cgi php7.3-mbstring

#RUN wget https://wordpress.org/latest.tar.gz

#RUN tar -xzvf latest.tar.gz

ARG autoindex=1
ENV var_autoindex=${autoindex}
COPY srcs/starting.sh /root
COPY srcs/ssl.conf /etc/nginx/sites-available/localhost.conf
COPY srcs/config.inc.php /root
COPY srcs/wordpress.tar.gz /root
COPY srcs/phpMyAdmin.zip /root
COPY srcs/index.php /root

RUN chmod u+x /root/starting.sh

CMD [ "/root/starting.sh" ]

EXPOSE 80

EXPOSE 443