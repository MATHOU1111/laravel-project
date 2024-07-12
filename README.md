# Instructions d'Installation du Projet

Ce README décrit les étapes pour installer et démarrer le projet après avoir effectué un `git clone`.



## Étape 1 : Installation de la base de donnée

On a besoin d'avoir MySQL ouvert via Xampp ou autre logiciel
(il faut  avoir composer pour laravel installé également)

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

( ces commandes vont créer la bdd pour le projet)

## Étape 2 : Lancement du Projet

Pour démarrer le projet, utilisez la commande suivante, toujours à la racine :

```bash
php artisan serv
```
Cette commande lance le projet sur le localhost:8000

# Explication du projet 

Il est possible de se login avec les logins suivant : 

```bash
john.doe@example.com
password1234
```

Dès lors il sera possible d'accéder aux menus de l'administration.

Tout est dynamique sauf la page d'accueil sur laquelle on trouve des éléments mis en brut pour le style (tout le système de promotion ne fonctionne pas).



++ le .env doit ressembler à ça : 

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:dgLnnUKL6K2au+Bc6fkGC/Pk94mRNfFgDUOV/pS9Jc8=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```
