
How to install Phpmyadmin in ubuntu:---


Installing phpmyadmin step by step :

1)

Ref : https://www.hostingadvice.com/how-to/install-phpmyadmin-on-ubuntu/

a) sudo apt-get update
b) sudo apt-get install -y phpmyadmin



2) Installing mcrypt in php 7

Ref : https://stackoverflow.com/questions/36402000/php-7-mcrypt-php-extension-required

Comment : Not sure if this is needed.

a) sudo apt-add-repository ppa:ondrej/php
b) sudo apt-get update
c) sudo apt-get install mcrypt php7.0-mcrypt
d) sudo phpenmod mcrypt

3) Adding phpmydmin config file

Ref : https://askubuntu.com/questions/55280/phpmyadmin-is-not-working-after-i-installed-it

Comment : Used second solution

a) sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
b) sudo a2enconf phpmyadmin
c) sudo service apache2 reload 