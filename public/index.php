<?php
require_once dirname(__FILE__) . "/../" . "bootstrap.php";

$httpBootstrap = new \Impress\Framework\Http\Bootstrap;
$httpBootstrap->response();


/*
Nginx conf:
    server {
        listen                   80;
        server_name              www.domain.com domain.com;
        access_log               /var/log/nginx/logs/domain_access.log;
        error_log                /var/log/nginx/logs/domain_error.log warn;
        error_page 411 = @my_error;
        location @my_error {
        }

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        root                    /www/web/public;
        index                   index.php index.html index.htm forum.php;

        location ~* ^.+\.(jpg|jpeg|css|gif|png|js|ico|thumb) {
            access_log              off;
            expires                 30d;
        }

        location ~ \.php$ {
            include                 fastcgi_params;
            fastcgi_index           index.php;
            fastcgi_param           SCRIPT_FILENAME $document_root$fastcgi_script_name;
            fastcgi_pass            unix:/tmp/php-fcgi-56.sock;
        }
    }


Apache with mod_php/PHP-CGI:
    <VirtualHost *:80>
        ServerName domain.com
        ServerAlias www.domain.com

        DocumentRoot /var/www/project/web
        <Directory /var/www/project/web>
            AllowOverride All
            Order Allow,Deny
            Allow from All
        </Directory>

        # uncomment the following lines if you install assets as symlinks
        # or run into problems when compiling LESS/Sass/CoffeScript assets
        # <Directory /var/www/project>
        #     Options FollowSymlinks
        # </Directory>

        ErrorLog /var/log/apache2/project_error.log
        CustomLog /var/log/apache2/project_access.log combined
    </VirtualHost>


PHP-FPM with Apache 2.2:
    <VirtualHost *:80>
        ServerName domain.com
        ServerAlias www.domain.com

        AddHandler php5-fcgi .php
        Action php5-fcgi /php5-fcgi
        Alias /php5-fcgi /usr/lib/cgi-bin/php5-fcgi
        FastCgiExternalServer /usr/lib/cgi-bin/php5-fcgi -host 127.0.0.1:9000 -pass-header Authorization

        DocumentRoot /var/www/project/web
        <Directory /var/www/project/web>
            # enable the .htaccess rewrites
            AllowOverride All
            Order Allow,Deny
            Allow from all
        </Directory>

        # uncomment the following lines if you install assets as symlinks
        # or run into problems when compiling LESS/Sass/CoffeScript assets
        # <Directory /var/www/project>
        #     Options FollowSymlinks
        # </Directory>

        ErrorLog /var/log/apache2/project_error.log
        CustomLog /var/log/apache2/project_access.log combined
    </VirtualHost>
*/

