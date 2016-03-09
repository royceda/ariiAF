#!/bin/bash


cd /home/reda/Documents/arii/project/ariiAF/src/;
cd ./test;
for i in `ls` ; 
do echo -e "\n==== Doing $i ... ====" ; 
cd /home/reda/Documents/arii/project/ariiAF/src/Arii;
sleep 3 ; 
git submodule add https://github.com/AriiPortal/$i $i;  
echo -e "==== $i DONE
====\n"; sleep 3 ; 
done
