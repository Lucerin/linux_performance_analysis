Linux performance tests page
============================

Is a web page that will allow you to upload series of patches to test them
and get the results on the same page.

Prerrequisites
--------------

You have to downlad and install the next packages and dependencies
- apache2(http-server)
- php5
- mysql mysql-server
- apache-mod-php

###Note:
A makefile will be made for ease the installation of the tool

### Installation

You need open a shell prompt and put the next sentence

$ git clone https://github.com/includeproject/linux_performance_analysis.git

###Inicializer  apache, php, mysql, services

$ sudo /etc/init.d/mysql start
$ sudo /etc/init.d/apache2 restart
$ apachectl -t -D php5_module

###Load database

$ mysql -u <mysqluser> -p<password> < <ruta al directorio del linux_performance_analysis>/web_scripts/Linux_performance_tests_page/databases/linuxPerformanceAnalysis.sql>


###To acces and use the web_page in your service
access to http://localhost of your system

##NOTE 
this location it could be for ubuntu and debian

$ sudo cp -r linux_performance_analysis/ /var/www/html/

