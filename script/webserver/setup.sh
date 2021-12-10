#!/bin/bash

# setup application
composer update
composer install
composer require predis/predis

# migrate database
php spark migrate
php spark db:seed UserSeeder