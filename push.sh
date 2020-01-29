#!/usr/bin/bash
php composer.phar self-update
php composer.phar install
yarn install
php bin/console cache:clear
yarn encore dev
php bin/console make:migration
php bin/console d:s:u --force
php bin/console doctrine:schema:validate
git add .
