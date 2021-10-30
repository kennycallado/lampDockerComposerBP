# lamp docker-compose boiler plate

## Features

Added composer.

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
