#!/usr/bin/bash
php composer.phar install
yarn install
php bin/console cache:clear
yarn encore dev
git add .
