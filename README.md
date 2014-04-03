Ephemit
==================================

## Installation

### Git / Récupération du projet

Creer un dossier INSSET dans votre dossier /var/www

Executer la commande suivante

``` bash
git init
```

Executer la commande suivante

``` bash
git clone https://github.com/hugosoltys/ephemit.git
```

Vous avez maintenant un dossier nommé "ephemit"

Executer la commande suivante 

``` bash
cd ephemit
```

### Installer les vendors

``` bash
php composer.phar update
```

### Configurer le fichier de connexion à la base de données

``` yaml
# app/config/parameters.yml

parameters:
    database_driver: pdo_mysql
    database_host: 127.0.0.1
    database_port: null
    database_name: ephemit
    database_user: your_login
    database_password: your_password
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    locale: fr
    secret: ThisTokenIsNotSoSecretChangeIt
```

### Commandes à effecuter après chaque pull

1. Mettre à jour la base de données

``` bash
php app/console doctrine:schema:update --force 
```

2. installer les fichiers externes

``` bash
php app/console assets:install web 
```

3. vider le cache

``` bash
rm -rf app/cache/*
```

### Pull

### Push

1. Regarder les changements effectués

``` bash
git status 
```

2. Ajouter les fichiers modifiés

``` bash
git add . 
```

3. Commit

``` bash
git commit -m "description des modifs" 
```

4. push

``` bash
git push origin master
```
Username for 'https://github.com' : hugo.soltys@gmail.com
Password for 'https://hugo.soltys@gmail.com@github.com': projetephemit2014
