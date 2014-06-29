#!/bin/sh

USER=$(whoami)
APACHE_USER=$(ps axho user,comm|grep -E "httpd|apache"|uniq|grep -v "root"|awk 'END {print $1}')

sudo rm -rf app/cache/*
php app/console cache:clear

sudo setfacl -R -m u:www-data:rwx -m u:"$USER":rwx app/cache app/logs
sudo setfacl -R -m u:www-data:rwx -m u:"$APACHE_USER":rwx app/cache app/logs

#chmod -R ugo-x,u+rwX,go+rX,go-w ./

