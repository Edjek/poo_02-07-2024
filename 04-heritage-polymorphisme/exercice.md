# Exercice : Créer une classe Article

## Objectif

Dans cet exercice, vous allez créer une classe `Article` en PHP, permettant de représenter un article avec un nom et un prix. Vous allez également implémenter des méthodes pour accéder et modifier ces propriétés, ainsi qu'une méthode pour afficher les détails de l'article.

## Instructions

1. **Définir la classe `Article`** :

   - La classe doit avoir deux propriétés privées : `name` et `price`.
   - Utilisez un constructeur pour initialiser ces propriétés lors de la création d'un objet.

2. **Implémenter les getters et setters** :

   - Créez des méthodes publiques `getName` et `getPrice` pour accéder aux propriétés.
   - Créez des méthodes publiques `setName` et `setPrice` pour modifier les propriétés.

3. **Afficher les détails du produit** :
   - Ajoutez une méthode `displayProduct` qui retourne une chaîne de caractères au format suivant :
     ```php
     "Le produit est : XXX et il coûte XXX euros"
     ```
     où `XXX` est le nom et le prix de l'article.

## Exercices Pratiques

1. **Créer et afficher un article** :

   - Créez un article avec le nom "Table" et le prix 99.99 euros.
   - Utilisez la méthode `displayProduct` pour afficher les détails de l'article.
   - Modifiez le prix de l'article à 89.99 euros et affichez de nouveau les détails.


Avec ces exercices, vous vous familiariserez avec la création et la manipulation de classes en PHP, ainsi qu'avec l'utilisation de getters, setters et méthodes pour afficher des informations.