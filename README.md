# Laravel PostgreSQL Setup and Seed Readme

## Установка

1. Убедитесь, что на вашем сервере установлен [Composer](https://getcomposer.org/) и [Node.js](https://nodejs.org/).
2. Склонируйте репозиторий:

    ```bash
    git clone git@github.com:2556180237/oscar.git
    ```

3. Перейдите в каталог проекта:

    ```bash
    cd 
    ```

4. Установите зависимости Composer:

    ```bash
    composer install
    ```

5. Установите зависимости npm:

    ```bash
    npm install
    ```

6. Скопируйте файл `.env.example` и переименуйте его в `.env`:

    ```bash
    cp .env.example .env
    ```

7. Внесите необходимые изменения в файл `.env` для настройки подключения к вашей PostgreSQL базе данных. Укажите имя базы данных, пользователя и пароль:

    ```env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=ваша_база_данных
    DB_USERNAME=ваш_пользователь
    DB_PASSWORD=ваш_пароль
    ```

## Миграции и Сиды

1. Выполните миграции для создания таблиц в базе данных:

    ```bash
    php artisan migrate
    ```

2. Запустите сиды, чтобы заполнить базу данных фиктивными данными:

    ```bash
    php artisan db:seed
    ```

## Запуск сервера

1. Запустите локальный сервер:

    ```bash
    php artisan serve
    ```

2. Откройте ваш браузер и перейдите по адресу [http://localhost:8000](http://localhost:8000).

## Использование Postman

1. Импортируйте коллекцию Postman, предоставленную в этом репозитории (`laravel_postgres_collection.json`).
2. Используйте импортированные запросы для взаимодействия с вашим Laravel приложением через Postman.

Теперь у вас настроено Laravel приложение с PostgreSQL базой данных, заполненной тестовыми данными, и готовым к использованию через Postman. Удачного использования!
