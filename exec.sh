#! /usr/bin/bash
ROOT=$(pwd)

SERVICES=$(ls | grep ".service")

SRC="/src"


read -p "Enter your command: " CMD

for SERVICE in $SERVICES 
  do

    cd "$SERVICE$SRC"
    
    eval $CMD

    cd $ROOT
done


