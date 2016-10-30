COURSE FEEDBACK SYSTEM , README FILE :

[1] INSTRUCTIONS FOR INSTALLATIONS
Admin has to install LAMP on the server pc
you can visit this link for installation :
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-
mysql-php-lamp-stack-on-ubuntu
or follow the instructions :
Step One—Install Apache
Apache is a free open source software which runs over 50% of the world’s web servers.
To install apache, open terminal and type in these commands:
sudo apt-get update
sudo apt-get install apache2
Step Two—Install MySQL
MySQL is a powerful database management system used for organizing and retrieving data
To install MySQL, open terminal and type in these commands:
sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql
DURING INSTALLATION OF MYSQL IT WILL ASK YOU TO SET PASSWORD , SET IT
ACCRODINGLY
Step Three—Install PHP
PHP is an open source web scripting language that is widely use to build dynamic webpages.
To install PHP, open terminal and type in this command.
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
After you answer yes to the prompt twice, PHP will install itself.
It may also be useful to add php to the directory index, to serve the relevant php index files:sudo nano /etc/apache2/mods-enabled/dir.conf
Add index.php to the beginning of index files. The page should now look like this:
DirectoryIndex index.php index.html index.cgi index.pl index.php index.xhtml
index.htm

NEXT STEP IS TO INSTALL THE APPLICATION ON SERVER :
PRE INSTALLATION CHECKS:
[1]open folder /var/www/html
[2]check if there is any folder named 'project'
[3]if it exists please rename it or remove it from the directory(important step)
STEPS FOR INSTALLING :
[1]open command line in the folder containing the project.zip
[2]type the following command : chmod +x install.sh
[3]press enter
[4]type the following command : ./install.sh
[5]press enter
[6]type you password when asked to
[7]you are done , application is installed
STEPS FOR SETUP:
NOTE : FOLLOW THE BELOW STEPS AS THEY ARE WRITTEN IN ORDER
[1]open any web browser
[2]type in the link box : localhost/project/adminSignUp/sqlUNP.php
[3]press enter
[4]enter the sql username and password in the given form
[5]press submit
[6]if the credentials work , you will be taken to next form or else try again
[7]enter the username and password of the administrator
[8]press submit
[9]if the form says account created
[10]press home button from the link at the top of the page
[11]your application is set up correctly , you may start using it
[12]for redirecting to login page you can also go to the link:
localhost/project/home.php or <server's ip address>/project/home.php