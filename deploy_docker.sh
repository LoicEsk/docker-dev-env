#!/bin/bash


#  Install des packet php
docker compose exec sf composer Install

# Install des packet JS
docker compose exec encore npm ci
docker compose stop encore && docker compose up -d encore
docker compose logs encore

# Liste des migrations Doctrine
docker compose exec sf php bin/console doctrine:migrations:list