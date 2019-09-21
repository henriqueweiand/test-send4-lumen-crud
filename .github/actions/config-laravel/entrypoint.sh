#!/bin/sh
cd lumen
php -r "file_exists('.env') || copy('.env.ci', '.env');"
php artisan cache:clear
php artisan key:generate