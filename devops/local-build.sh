#!/bin/bash

#clear images and containers
docker-compose -f docker-compose-local.yml down
docker-compose -f docker-compose-local.yml up
docker-compose -f docker-compose-local.yml down
