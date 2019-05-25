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

To clear containers:

docker rm -f $(docker ps -a -q)

To clear images:

docker rmi -f $(docker images -a -q)

To clear volumes:

docker volume rm $(docker volume ls -q)

To clear networks:

docker network rm $(docker network ls | tail -n+2 | awk '{if($2 !~ /bridge|none|host/){ print $1 }}')
