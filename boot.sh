#! /usr/bin/bash

function firstBoot() {

    docker-compose run --rm composer install
    chmod -R 777 bootstrap/
    chmod -R 777 storage/

    echo "Folder config done!"
}


ROOT=$(pwd)
echo $ROOT

SERVICES=$(ls | grep ".service")
SRC="/src"

for SERVICE in $SERVICES 
  do
    cd "$SERVICE$SRC"
    # -------- First boot ----------
    # firstBoot
    
    cd "$ROOT/$SERVICE"
    docker-compose up -d --build

    break
done


