#!/bin/sh
docker rm -f $(docker ps -qa)
sleep 5
osascript -e 'quit app "Docker"'
