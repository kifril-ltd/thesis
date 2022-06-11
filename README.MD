- [Системные требования](#системные-требования)
  - [Windows](#windows)
  - [Linux](#linux)
    - [Установка Docker](#установка-docker)
    - [Установка docker-compose](#установка-docker-compose)
- [Развертывание проекта](#развертывание-проекта)
  - [Первый запуск приложения](#первый-запуск-приложения)
  - [Последующий запуск](#последующий-запуск)

# Системные требования
## Windows

Необходимо, чтобы на компьютере был настроен [WSL](https://docs.microsoft.com/en-us/windows/wsl/install) и установлен [Docker](https://docs.docker.com/desktop/windows/install/). С инструкциями по установке можно ознакомиться по ссылкам, приведенным в предыдущем предложении.

## Linux

### Установка Docker

С помощью следующих команд мы настроим репозиторий для установки Docker
    
    sudo apt update
    sudo apt install apt-transport-https ca-certificates curl software-properties-common
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
    sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"

После успешного добавления репозитория, установим Docker

    sudo apt install docker-ce

Теперь Docker должен быть доступен в системе, проверить можно командой 

    sudo systemctl status docker

### Установка docker-compose

Запустите следующую команду для скачивания текущей стабильной версии

    sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

> Чтобы установить другую версию Compose, измените 1.29.2 на ту версию, которую хотите установить

Добавьте права исполнения для исходных файлов

    sudo chmod +x /usr/local/bin/docker-compose

# Развертывание проекта

Клонируйте репозиторий с проектом 

    git clone ...

Внутри директории с проектом необходимо создать файл `.env`, скопировать туда содержимое файла `.env.test` и заполнить пропущенные поля в соответствии с вашей конфигурацией, например

    ...
    DB_PORT=5432
    FORWARD_DB_PORT=5432
    DB_DATABASE=energy
    DB_USERNAME=energy_user
    DB_PASSWORD=energy_password
    ...

Запускаем docker-compose

    docker-compose up -d // на windows эта команда должна всегда отрабатывать
    или
    sudo docker-compose up -d // если на linux не прокатило с обычными правами

> Под linux возможно понадобится выдать права на папки `storage` и `vendor` командами:

    sudo chmod 777 -R vendor
    sudo chmod 777 -R storage

Если все прошло успешно, то выполняем следующую команду для проверки работы контейнеров

    [sudo] docker ps

Результат должен выглядеть примерно так

    CONTAINER ID   IMAGE                           COMMAND                  CREATED         STATUS         PORTS                     NAMES
    6975cd12fd65   nginx:stable-alpine             "/docker-entrypoint.…"   3 minutes ago   Up 3 minutes   0.0.0.0:8000->80/tcp      thermal-power-engineering_nginx
    59538802754c   thermal-power-engineering_php   "docker-php-entrypoi…"   3 minutes ago   Up 3 minutes   0.0.0.0:30000->9000/tcp   thermal-power-engineering_php
    eaaf2b7b1ab8   postgres:12.3-alpine            "docker-entrypoint.s…"   3 minutes ago   Up 3 minutes   0.0.0.0:60296->5432/tcp   thermal-power-engineering_postgres

## Первый запуск приложения

Заходим в контейнер с `php`

    [sudo] docker exec -it thermal-power-engineering_php sh

Выполняем внутри контейнера следующие команды

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed

Затем устанавливаем зависимости `frontend`

    npm install

Пробуем запустить `frontend` 

    npm run watch или npm run dev

Если все прошло успешно, то приложение будет доступно на `localhost:8000`

## Последующий запуск

Запускаем контейнеры командой

    [sudo] docker-compose up -d

И запускаем в контейнере приложения `frontend`

    [sudo] docker exec -it thermal-power-engineering_php npm run watch или dev
    
Также, при возникновении конфликтов сидов при их обновлении нужно вести команды:

    php artisan migrate:refresh
    php artisan db:seed
    
