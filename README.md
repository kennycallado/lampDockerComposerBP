# lamp docker-compose boiler plate

Changed the database to mariadb to get better compatibility with arm.

## Features

### Added composer.

### Added twig.

To make it work I have include a new dependency into the _Dockerfile_, _libicu-dev_ to be able to install _intl_ through _docker-php-ext-install_. This means that the built image is like 200mg bigger, however, with it you can set the _locale_ in functions like `format_date()`, `format_currency()`, etc.

## Turn on

Turn on the lamp `docker-compose up --build`

In case you want to remove the containers after they finish `docker-compose up && docker-compose rm -fsv`

### App access

Accessible from http://localhost:80

### PhpMyAdmin

Accessible from http://localhost:8080

## Config

You can configure some things throw the .env. Remember not to share it (.gitignore):
- APP_NAME
- ENVIRONMENT
- DB_ROOT_PASSWORD 

By default root password to access mysql _toor_.

Use `mysql/init_db.sql` to insert some sql into mysql on start.

### Composer:

Install all the dependencies `composer install`.

In case you want use _composer_ from docker:

``` bash
docker run --rm --interactive --tty \
  --volume $PWD/src:/app \
  --user $(id -u):$(id -g) \
  composer install
```

Where $PWD is the root directory of this repository.
