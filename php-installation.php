

How to install php in ubuntu:-

1) Installing php:- 

Ref: https://howtoubuntu.org/how-to-install-lamp-onubuntu

a) sudo apt install php-pear php-fpmphp-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml lib apache2-mod-php


2) Restart server:-

a) sudo service apache2 restart

3) Check Php:- 

a) php-r 'echo "\n\nYour Php Installation Is working Fine. \n\n\n";'