#!/bin/sh
cd lumen
php -r "file_exists('.env') || copy('.env.ci', '.env');"
php -r "file_exists('phpunit.xml') || copy('phpunit.ci.xml', 'phpunit.xml');"
php artisan cache:clear