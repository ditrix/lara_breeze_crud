
### Sail howto


## Установка laravel

# Установка Composer (если не установлен)

curl -sS https://getcomposer.org/installer | php

sudo mv composer.phar /usr/local/bin/composer


# Создание нового проекта Laravel

composer create-project laravel/laravel my-laravel-project

cd my-laravel-project


# Установка Laravel Sail

cp .env.example .env
nano .env  

composer require laravel/sail --dev

php artisan sail:install


# Проверка наличия файла docker-compose.yml

ls -la

# Если файла нет, повторно установите Sail

composer require laravel/sail --dev

php artisan sail:install



# Запуск контейнеров Docker

./vendor/bin/sail up -dev


# Generate a new application key:

./vendor/bin/sail artisan key:generate


# Create a symbolic link to the storage directory:

./vendor/bin/sail artisan storage:link

# запуск миграций

./vendor/bin/sail artisan migrate



## Другие команды

# Убедитесь, что контейнеры запущены

./vendor/bin/sail up -d

# Подключитесь к контейнеру Laravel shell

./vendor/bin/sail shell

# Используйте MySQL клиент для подключения к MySQL серверу

mysql -hsail-mysql -usail -ppassword

# Или подключитесь к контейнеру MySQL напрямую

docker ps

docker exec -it <mysql_container_name> bash

mysql -uroot -p



## Подключение к контейнеру Laravel shell

./vendor/bin/sail shell


# Найдите имя контейнера Laravel

docker ps

# Подключитесь к контейнеру Laravel с помощью Docker

docker exec -it <laravel_container_name> bash


# specific commands for currenct proj only

 composer require laravel/breeze --dev

 artisan breeze:install blade

---

 artisan make:model Company -m

 artisan migrate

 artisan make:controller Api/CompanyController --resource --api --model=Company

 artisan make:resource CompanyResource

 artisan make:request CompanyRequest
