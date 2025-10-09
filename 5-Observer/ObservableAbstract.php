<?php
namespace App;

abstract class ObservableAbstract{
    private $observers = array();

    /**
     * Add an Observer to the $observers Array
     *
     * @param $observer
     */
    final public function addObserver($observer){
      /*TODO*/
    }

    /**
     * Remove an Observer from the $observers Array
     *
     * @param $observer
     */
    final public function removeObserver($observer){
      /*TODO*/
    }

    /**
     * Notify all Observers about a new Value
     *
     * @param $value
     */
    final protected function notifyObserver($value){
      /*TODO*/
    }
}