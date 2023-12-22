#!/bin/bash

name=$1;

if [[ -z $(docker container ls -a | grep "$name") ]]; \
then 
    echo "No container found. $name container..."; \
else 
    docker stop $name && docker rm $name; \
fi;

docker compose up --detach;