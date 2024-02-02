# Docker dev env

## Configuration Wordpress nu

Lancement d'un container WordPress 2 liés : base de données et serveur mail de dev

## Utilisation du serveur Docker

- Lancer le serveur : ```docker-compose up``` 

- Lancer le serveur détaché de la console : ```docker-compose up -d```
- Stopper le serveur en mode détaché : ```docker-compose stop```

- Build ou rebuild des container : ```docker-compose build```

- Executer des commandes php ou composer sur le serveur Docker : 
    1. Se connecter : ```docker-compose exec php bash``` (le serveur doit être up)
    2. Lancer la commande voulue

