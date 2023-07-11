# room-management-back
API RoomManager - Projet épreuve final 3BCI
## Installation de l'API
- Installation des dépendances : composer install
- Créer un fichier .env.local copier collé le contenu du .env et adapter en fonction de votre base de données
- Créer la base de données : php bin/console doctrine:database:create
- Exécutez les migrations : php bin/console doctrine:migrations:migrate
- Démarrez le serveur : symfony serve

