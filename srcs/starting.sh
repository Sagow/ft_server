#!/bin/bash

LOCALHOST="/var/www/localhost"

mkdir -p $LOCALHOST
cd $LOCALHOST
cp /root/phpMyAdmin.zip ./
unzip ./phpMyAdmin.zip >> /dev/null
cp /root/config.inc.php ./phpMyAdmin
cp /root/index.php ./
rm ./phpMyAdmin.zip

cp /root/wordpress.tar.gz ./
tar -xf ./wordpress.tar.gz >> /dev/null
rm ./wordpress.tar.gz
chown -R www-data:www-data $LOCALHOST

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/CN=localhost"
ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/localhost.conf
if [ "$var_autoindex" != "1" ]
	then
	sed -Ei 's/\tautoindex on;/\tautoindex off;/g' /etc/nginx/sites-available/localhost.conf
fi

service php7.3-fpm start
service nginx start
service mysql start
echo "CREATE DATABASE wordpress;"|mysql -u root
echo "CREATE USER 'user42'@'%' IDENTIFIED BY 'USER42@password';" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'user42'@'%';" | mysql -u root

bash