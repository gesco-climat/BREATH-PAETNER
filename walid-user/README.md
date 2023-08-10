# README - Application Web Laravel de Gestion d'Utilisateurs

Bienvenue dans l'application web de gestion d'utilisateurs basée sur Laravel ! Cette application vous permet de gérer facilement les utilisateurs enregistrés, en ajoutant leurs informations, en les visualisant et même en les supprimant. Suivez les étapes ci-dessous pour démarrer :

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP (version X.X.X)
- Composer
- Serveur Web (comme Apache ou Nginx)
- Base de données MySQL

## Installation

1. Clonez ce dépôt sur votre machine : `git clone https://github.com/votre-utilisateur/nom-du-repo.git`
2. Accédez au répertoire du projet : `cd nom-du-repo`
3. Installez les dépendances avec Composer : `composer install`
4. Copiez le fichier `.env.example` en `.env` et configurez les paramètres de base de données.
5. Générez une clé d'application : `php artisan key:generate`
6. Effectuez les migrations de la base de données : `php artisan migrate`

## Utilisation

### Ajouter un Utilisateur

1. Accédez à la section "Ajouter un Utilisateur".
2. Remplissez les champs : nom, prénom, e-mail, âge et bio.
3. Cliquez sur le bouton "Ajouter" pour enregistrer l'utilisateur.

### Visualiser les Utilisateurs

1. Dans le tableau de bord, accédez à la section "Visualiser les Utilisateurs".
2. Vous verrez la liste de tous les utilisateurs enregistrés avec leurs informations.
3. Pour en savoir plus sur un utilisateur, cliquez sur son nom pour afficher sa page de détails.

### Supprimer un Utilisateur

1. Sur la page de détails d'un utilisateur, cliquez sur le bouton "Supprimer".
2. Confirmez la suppression lorsque vous y êtes invité.
3. L'utilisateur sera retiré de la base de données.

## Contribution

Si vous souhaitez contribuer à ce projet, n'hésitez pas à soumettre des pull requests ou à ouvrir des issues sur GitHub.

## Auteur

Ce projet a été développé avec amour par [Votre Nom].

## Licence

Ce projet est sous licence [Licence]. Voir le fichier `LICENSE` pour plus d'informations.

---

C'est tout ! Vous êtes prêt à utiliser cette application pour gérer les utilisateurs de manière simple et efficace. N'hésitez pas à explorer toutes les fonctionnalités et à nous faire part de vos commentaires. Bonne utilisation !
