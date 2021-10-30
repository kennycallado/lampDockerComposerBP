# lamp docker-compose boiler plate

## Turn on

Turn on the lamp `docker-compose up --build`

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
