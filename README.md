# Application PHP - Gestion de Produits

Cette application PHP simple permet de gérer une liste de produits (nom, prix, description) en utilisant l'architecture MVC (Modèle, Vue, Contrôleur).

## Fonctionnalités

- **Afficher la liste des produits** : Affiche tous les produits enregistrés.
- **Ajouter un produit** : Permet d'ajouter un nouveau produit avec un nom, un prix et une description.
- **Supprimer un produit** : Permet de supprimer un produit de la liste.

## Structure du projet

Le projet est divisé en 4 fichiers principaux :

1. **`index.php`** : Point d'entrée de l'application. Inclut le contrôleur qui gère l'affichage et les actions de l'utilisateur.
2. **`model.php`** : Contient la gestion des données et des produits. Les fonctions ici permettent d'ajouter, de supprimer et de récupérer les produits.
3. **`view.php`** : Contient les fonctions d'affichage de la liste des produits et du formulaire d'ajout.
4. **`controller.php`** : Gère la logique du côté serveur pour ajouter, supprimer et afficher les produits.

## Installation

1. Clonez ou téléchargez ce projet.
2. Placez les fichiers dans un répertoire accessible par votre serveur web (par exemple, `htdocs` pour XAMPP).
3. Accédez à `index.php` dans votre navigateur pour interagir avec l'application.

## Contribution

1. Fork ce dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature-nom`).
3. Commitez vos modifications (`git commit -m 'Ajout de la fonctionnalité X'`).
4. Poussez vos changements (`git push origin feature-nom`).
5. Soumettez une pull request.

## License

Ce projet est sous licence MIT.
