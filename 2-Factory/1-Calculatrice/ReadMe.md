# 1 - Calculatrice

Utiliser le **design pattern factory** pour créer des types d’opération de calcul (addition, soustraction)

L’application doit contenir 3 classes : **AdditionFactory** et **SoustractionFactory** qui héritent de **OperationFactory**.

Ainsi que 2 classes **AdditionCalculation** et **SoustractionCalculation** qui implémentent l’interface **CalculationInterface**

Elle contient une méthode abstraite `calculationType().`

La méthode `calculationType()` retourne une nouvelle instance de l’interface **CalculationInterface**