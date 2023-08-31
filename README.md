# Liste-utilisateur

Ce projet permet de gérer une liste d'utilisateurs : afficher la liste, voir les détails d'un utilisateur, le mettre à jour et en créer un nouveau.

## Prérequis

- PHP 7.4 ou supérieur
- Serveur MySQL
- Serveur web (comme Apache ou Nginx)

## Installation

1. Clonez ce dépôt dans le répertoire de votre serveur web.
2. Importez la base de données à partir du fichier `database.sql` (fourni séparément).
3. Mettez à jour le fichier `config/db.php` avec vos paramètres de connexion à la base de données.
4. Accédez au projet via votre navigateur.

## Fonctionnalités

- **Liste des utilisateurs** : Affiche tous les utilisateurs enregistrés dans la base de données.
- **Détails de l'utilisateur** : Affiche des informations détaillées sur un utilisateur spécifique.
- **Mise à jour de l'utilisateur** : Permet de mettre à jour les informations d'un utilisateur.
- **Création d'un utilisateur** : Ajoute un nouvel utilisateur à la base de données.

## Structure du projet

- `controllers/` : Contient les contrôleurs de l'application.
- `models/` : Contient les modèles de l'application, notamment les interactions avec la base de données.
- `views/` : Contient les fichiers de vue de l'application.
- `config/` : Contient les fichiers de configuration, comme la connexion à la base de données.
- `assets/` : Contient les fichiers CSS, JS et autres ressources.

## Contribution

Si vous souhaitez contribuer au projet, veuillez créer une "pull request" ou ouvrir un "issue" sur le dépôt GitHub.

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.
