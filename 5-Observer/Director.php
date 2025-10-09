<?php
namespace App;

class Director{
 public function run(){
   	// Object creation/generation
    // TODO : Instancier Sujet et Observer


    // Our FuelSensor extends Observeable and handles the Observers
    /* TODO : Enregistrer les Observers dans le Sujet */


    // The Observers are triggered by a value change
    $fuelSensor->setFuelLevel(80);
    $fuelSensor->setFuelLevel(10);
    $fuelSensor->setFuelLevel(5);
    $fuelSensor->setFuelLevel(1);
    $fuelSensor->setFuelLevel(100);


    // uncommend to throw Exception
    //$fuelSensor->setFuelLevel(101);


    // Removing Observer when they are not needed anymore
    //$fuelSensor->removeObserver($fuelTankWarning);
    //$fuelSensor->removeObserver($fuelDisplay);
   
 }
}
/*TODO lancer la méthode run du Director*/