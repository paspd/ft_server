#~~~~SSL~~~~~
mkdir -p /etc/nginx/ssl
openssl req -newkey rsa:4096 \
            -x509 \
            -sha256 \
            -days 365 \
            -nodes \
            -out /etc/nginx/ssl/localhost.pem \
            -keyout /etc/nginx/ssl/localhost.key \
            -subj "/C=FR/ST=Lyon/L=Lyon/O=42School/OU=ldauga/CN=localhost"

#~~~~~NGINX~~~~~
cp ./default etc/nginx/sites-available
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

#~~~~~MYSQL~~~~~
service mysql start
echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'ldauga'@'localhost' IDENTIFIED BY 'test';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "update mysql.user set plugin='mysql_native_password' where user='ldauga';" | mysql -u root


#~~~~~PHPMYADMIN~~~~~
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/html/phpMyAdmin
mv ./config.inc.php var/www/html/phpMyAdmin
chmod 660 /var/www/html/phpMyAdmin/config.inc.php
chown -R www-data:www-data /var/www/html/phpMyAdmin
service php7.3-fpm start

#~~~~~WORDPRESS~~~~~
wget https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz
mkdir var/www/html/wordpress
cp -a wordpress/. /var/www/html/wordpress
mv ./wp-config.php /var/www/html/wordpress

service nginx start
sleep infinity