## Setup

`git clone https://github.com/leandrolasnor/vs-challenge.git`

`cd vs-challenge`

`docker-compose up -d`

`docker-compose ps`

`docker exec -it vs-api-php-fpm bash`

`composer install --no-dev`

`php artisan key:generate`

## Using

`http://localhost:8888`
