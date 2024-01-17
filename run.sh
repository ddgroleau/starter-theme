#!/bin/bash

name=$1;

if [[ -z $(docker container ls -a | grep "$name") ]]; \
then 
    echo "No container found. $name container..."; \
else 
    docker stop $name && docker rm $name; \
fi;

docker system prune --force --volumes;
docker compose --file docker-compose.dev.yml up --detach;
cd wp-content/themes/$name && npx tailwindcss -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch