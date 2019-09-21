#!/bin/sh
cd lumen
php artisan cache:clear
php artisan config:clear