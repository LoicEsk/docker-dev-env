# Docker dev env

## Les cofigrations disponibles

- php 7.2 / apache / mysql
- php 7.4 / nginx / mysql
- php 7.4 / apache / mysql


## Utilisation du serveur Docker

1. Copier ses clés RSA dans le scope Docker ``cp -r ~/.ssh/id_rsa .docker/.ssh``
2. Lancer le serveur : ```docker-compose up``` 

- Lancer le serveur détaché de la console : ```docker-compose up -d```
- Stopper le serveur en mode détaché : ```docker-compose stop```

- Build ou rebuild des container : ```docker-compose build```

- Executer des commandes php ou composer sur le serveur Docker : 
    1. Se connecter : ```docker-compose exec php bash``` (le serveur doit être up)
    2. Lancer la commande voulue

