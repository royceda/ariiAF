#!/bin/bash


/etc/init.d/apache2 stop ;
rm -rf /home/arii/Symfony/app/logs/* ; 
rm -rf /home/arii/Symfony/app/cache/*;
/etc/init.d/apache2 start;
