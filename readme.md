### bash

## Заходим в контейнер

docker-compose exec wordpress bash

## Устанавливаем WP-CLI

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

## Устанавливаем WordPress

wp core install --url=localhost:8000 --title="Site" --admin_user=admin --admin_password=admin --admin_email=admin@site.com --skip-email --allow-root

## Выходим

exit
