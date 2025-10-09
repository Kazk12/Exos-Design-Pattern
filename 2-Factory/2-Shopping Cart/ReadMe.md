# 2- Shopping Cart
Patron de conception Factory Method

## Définition
L'essence du design pattern Factory consiste à "mettre en œuvre le concept de fabriques et à résoudre le problème de la création d'objets (produits) sans spécifier la classe exacte de l'objet qui sera créé."

## En détail
Ce patron est particulièrement utile dans des situations où la création d'un objet concret réel est complexe/coûteuse ou lorsque le type concret cible est inconnu de l'appelant.

Lors de l'intégration de systèmes distincts, d'un côté, il y a un framework qui fournit une valeur significative en résolvant les aspects les plus courants d'un problème. De l'autre côté se trouve le consommateur du framework qui souhaite construire sur le framework pour répondre à des cas d'utilisation spécifiques. 

Étant donné que le framework ne peut pas imaginer toutes les utilisations possibles, il prévoit la possibilité d'étendre via l'**abstraction**. Une telle abstraction pour la création d'objets est **une Factory Method**.

Dans ce patron particulier, le framework n'est pas obligé de se soucier de la manière dont des instances spécifiques d'un type concret particulier sont créées. 

Il abstrait simplement la création dans une interface que le consommateur du framework peut ensuite implémenter. 

Le résultat final est que le consommateur du framework peut répondre à ses cas d'utilisation spécifiques entourant la création d'objets/instances à sa manière, tout en tirant parti de la valeur ajoutée globale fournie par le framework.

## Scénario

**Du côté du framework :**

Vous souhaitez construire un framework de panier d'achat, mais vous ne souhaitez pas créer d'objets modèle concrets parce que vous voulez que vos consommateurs fournissent à la fois la factory pour les objets modèle de produits ainsi que ces objets modèle de produits spécifiques.

**Du côté du consommateur :**

Vous souhaitez pouvoir construire votre objet modèle de produit sans avoir à étendre un modèle de produit de base fourni par un système de panier d'achat. 

Idéalement, vous pouvez développer votre propre objet modèle de produit et simplement introduire un mécanisme dans le framework de panier d'achat qui peut ensuite consommer ces objets modèle de produits.


A partir du code fournir, implémenter la class **MyShopProduct** et **MyShopProductFactory**.