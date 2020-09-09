# Docker dev env

Configurations Docker pour développement web. Les config sont faites pour êtes copiées à la racine d'un projet dont le vhost est sur public/. Elles fournient un serveur sur localhost:8080. Voir utilisation ci-dessous.

Selectionner la branche qui correspond à la configuration souhaitée.

## Les configrations disponibles

- php 7.2 / apache / mysql
- php 7.4 / nginx / mysql
- php 7.4 / apache / mysql


## Utilisation du serveur Docker

- Lancer le serveur : ```docker-compose up``` 

- Lancer le serveur détaché de la console : ```docker-compose up -d```
- Stopper le serveur en mode détaché : ```docker-compose stop```

- Build ou rebuild des container : ```docker-compose build```

- Executer des commandes php ou composer sur le serveur Docker : 
    1. Se connecter : ```docker-compose exec php bash``` (le serveur doit être up)
    2. Lancer la commande voulue

