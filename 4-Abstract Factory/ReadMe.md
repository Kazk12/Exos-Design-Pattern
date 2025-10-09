# 4-Abstract Factory

Patron de conception Abstract Factory

## Définition
L'essence du design pattern Abstract Factory est de "fournir une interface pour créer des familles d'objets liés ou dépendants sans spécifier leurs classes concrètes".

## En détail
Ce patron est particulièrement utile lors de l'intégration de systèmes distincts. D'un côté, il y a un framework qui fournit une valeur significative en résolvant les aspects les plus courants d'un problème. De l'autre côté se trouve le consommateur du framework qui souhaite construire sur le framework pour répondre à des cas d'utilisation spécifiques. 

Étant donné que le framework ne peut pas imaginer toutes les utilisations possibles, il prévoit la possibilité d'étendre via l'abstraction. Une telle abstraction est une Abstract Factory.

Dans ce patron particulier, le framework n'est pas obligé de se soucier du nombre d'instances spécifiques d'un type concret particulier qui sont créées. 

Il abstrait simplement la création de ces types concrets dans une interface que le consommateur du framework peut ensuite implémenter. 

Le résultat final est que le consommateur du framework peut répondre à ses cas d'utilisation spécifiques entourant la création d'objets/instances à sa manière, tout en tirant parti de la valeur ajoutée en gros fournie par le framework.

## Scénario

**Du côté du framework :**

Vous souhaitez construire un framework de panier d'achat, mais vous ne voulez pas créer d'objets modèle concrets de produits et de méthodes d'expédition parce que vous souhaitez que vos consommateurs fournissent à la fois la fabrique d'objets modèle de produits et de méthodes d'expédition, ainsi que ces objets modèle spécifiques de produits et de méthodes d'expédition.

**Du côté du consommateur :**

Vous souhaitez pouvoir construire votre objet modèle de produit et de méthode d'expédition sans avoir à étendre un modèle de base fourni par un système de panier d'achat. Idéalement, vous pouvez développer votre propre modèle d'objet de produit et introduire simplement un mécanisme dans le framework de panier d'achat qui peut ensuite consommer ces objets modèle de produits.