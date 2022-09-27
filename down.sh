#! /usr/bin/bash

ROOT=$(pwd)
echo $ROOT

SERVICES=$(ls | grep ".service")
SRC="/src"

for SERVICE in $SERVICES 
  do

    cd "$ROOT/$SERVICE"
    docker-compose down

    cd $ROOT
    break
done