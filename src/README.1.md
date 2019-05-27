## Setup

`git clone https://github.com/leandrolasnor/vs-challenge.git`

`cd vs-challenge`

`docker-compose up -d` or `docker-compose up`

## List containers

`docker-compose ps`

## Access container

`docker exec -it vs-api-mysql bash`

## Access application

`http://localhost:8888`

## Do not forget

`composer install`

## Others commands

*Down and remove volumes*

`docker-compose down -v`

*To clear containers:*

`docker rm -f $(docker ps -a -q)`

*To clear images:*

`docker rmi -f $(docker images -a -q)`

*To clear volumes:*

`docker volume rm $(docker volume ls -q)`

*To clear networks:*

`docker network rm $(docker network ls | tail -n+2 | awk '{if($2 !~ bridge|none|host/){ print $1 }}')`
