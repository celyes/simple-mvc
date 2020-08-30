FROM php:7.4.7-apache

# Copy directories
COPY app/ /var/www/html/app
COPY core/ /var/www/html/core
COPY public/ /var/www/html/public
COPY resources/ /var/www/html/resources

# Copy files
COPY index.php /var/www/html/index.php 
COPY config.php /var/www/html/config.php 
COPY .gitignore /var/www/html/.gitignore
COPY composer.json /var/www/html/composer.json 
COPY composer.lock /var/www/html/composer.lock 
COPY README.md /var/www/html/README.md 

# Expose ports
EXPOSE 80

#Run command
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
CMD ["composer", "install"]
