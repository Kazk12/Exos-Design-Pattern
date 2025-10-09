# 5-Observer


## Première étape

L'objectif et de réussir à faire fonctionner le code client contenu dans `Director.php`

Le programme est composé des Classes Suivantes :

 - La classe **Director**, qui correspond à notre code client

 - La classe **FuelSensor** qui implémentera l'interface **ObservableInterface** et héritera de la classe abstraite **ObservableAbstract**

 - La classe **FuelTankWarning** qui implémentera l'interface **ObserverInterface**

 - La classe **FuelDisplay** qui implémentera l'interface **ObserverInterface**

Nous allons créer une objet **FuelSensor**. Cet Objet devra être observé par nos deux observers, **FuelTankWarning** et **FuelDisplay**.

A chaque fois que la méthode `setFuelLevel` de **FuelSensor** est appelée, l'ensemble des classes **Observers** enregistrées seront notifiées avec la nouvelle valeur de `fuelLevel`, et agiront en conséquence.



## Deuxième étape


### **Dans Director.php :**

 - Ajouter l'instanciation du nouveau Sensor
 - Ajouter l'instanciation du nouvel Observer
 - Ajuster plusieurs fois la pression selon les valeurs suivantes
    - 3
    - 2.6
    - 1

### **Dans PressureSensor.php :**

Créer un nouveau type de **Sensor** appelé **PressureSensor**, qui va pouvoir être observable, et qui va notifier à chaque fois qu'on ajuste la pression.

Le pression s'ajuste à l'aide de la méthode `setPressure`.

### **Dans PressureWarning.php :**

Faire en sorte qu'une **LED ROUGE** s'affiche si la pression est **en dessous** de `2.4`
Faire en sorte qu'une **LED VERTE** s'affiche si la pression est **entre**  `2.4`  et `2.7`
Faire en sorte qu'une **LED ROUGE** s'affiche si la pression est **supérieure** à `2.7`