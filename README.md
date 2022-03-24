# Test-Mandarine-mini-blog

### installation
Cloner le dépot avec a commande :
  git clone https://github.com/Timothee-Augustin/Test-Mandarine-mini-blog.git

Entrer le dossier du projet ('cd Test-Mandarine-mini-blog')

creer un fichier .env.local dans lequel vous entrez :
  DATABASE_URL="bdd://your_username:your_pwd@127.0.0.1:3306/mandarine?serverVersion=8.0"
en remplaçcant bdd :  la base de données que vous utilisez
               your_username : votre identifiant de connection à la bdd 
               your_password : votre mot de passe de connection à la bdd               

Installer les dépendances à l'aide des commandes :
  composer install
puis : 
  yarn install

Exécuter WebPack :
  yarn encore production

Créer la base de données :
  symfony console make:migration
  symfony console doctrine:migrations:migrate

Générer des données de test :
  php bin/console doctrine:fixtures:load

Démarrer le server :
  symfony server:start

Ensuite démarrez votre navigateur et entrez localhost:8000 dans la barre de navigation

### Commentaires
Je n'ai pas réussi à autogénérer la date de création d'un article malgré le réglage de la valeur par défaut à current_timestamp dans la base de données.
