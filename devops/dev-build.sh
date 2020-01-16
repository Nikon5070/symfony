#!/bin/bash

#clear images and containers
docker-compose -f docker-compose-dev.yml down
docker-compose -f docker-compose-dev.yml up
docker-compose -f docker-compose-dev.yml down
