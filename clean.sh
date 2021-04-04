#!/bin/bash

echo "Cleaning containers and images of code-batlle"

CONTAINERS=$(docker ps -a | grep "code-battle_" | awk '{print $1}' | tr '\n' ' ') 

# if [ $CONTAINERS ]; then
    echo "Removing containers $CONTAINERS"
    docker rm $CONTAINERS
# else
#     echo "No containers"
# fi

IMAGES=$(docker images | grep "code-battle_" | awk '{print $3}' | tr '\n' ' ')
# if [ $IMAGES ]; then
    echo "Removing images $IMAGES"
    docker rmi $IMAGES
# else
#     echo "No images"
# fi
