#!/bin/sh
SCRIPT_DIR=$(cd $(dirname $0); pwd)
open -a Docker && sleep 40
docker rm -f $(docker ps -qa) && sleep 1
docker-compose -f "${SCRIPT_DIR}/docker-compose.yml" up -d --build
