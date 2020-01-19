#!/bin/bash

#clear images and containers
containers=$(docker ps -qa --no-trunc --filter "name=ratio-" --filter "status=exited")
images=$(docker images -f "dangling=true" -q)

if [[ -n "$containers" ]]
  then
    docker rm $containers
  else
    echo "Not containers"
fi

if [[ -n "$images" ]]
  then
    docker rmi $images
  else
    echo "Not images"
fi

