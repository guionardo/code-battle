#!/bin/bash
. .env
LANGS=("python" "golang" "php" "node")
docker-compose build
docker rm $HTTP_SERVER > /dev/null
docker run -d -it --rm -p 8090:8090 --name $HTTP_SERVER --network code-battle_default code-battle_http_server
for LANG in "${LANGS[@]}"
do
    cp src/timing.sh src/$LANG/timing.sh
    docker-compose up $LANG
    docker container inspect code-battle-$LANG > reports/inspected.$LANG.json
done

docker-compose up parser
docker stop $HTTP_SERVER
# docker rm $HTTP_SERVER > /dev/null