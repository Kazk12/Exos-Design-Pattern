# PC Builder

Le principe est de faire fonctionner 1 builder afin de pouvoir recréer un PC.

L'objectif est de construire un code en **TDD** qui fait passer le test contenu dans cet exercice.



![Builder](./../../Images/aaf5f90c-b4ae-4c4c-bc19-1294bed176f4.png)

Un PC sera composé de class **Part**

Ces Parts seront de 4 types differents :

- Motherboard
- Processor (abstract)
- Storage (abstract)
- Ram


**PcBuilder** implémentant l'interface **BuilderInterface** sera le coeur de notre **design Pattern Builder**. 

Il va nous permettre de composer notre PC en y ajoutant des composants.

La Méthode `getComputer` de **BuilderInterface** va nous permettre de générer notre Produit : Une classe implémentant **ComputerInterface**, ici **Desktop**.

Enfin la classe **Master** va être notre **Director**. 

C'est elle qui va exécuter le Builder Choisi. 

Ici on utilise PC Builder pour créer un **Desktop**. Mais on pourrait imaginer ensuite créer un **SmartPhoneBuilder** pour créer un Téléphone et ainsi de suite.