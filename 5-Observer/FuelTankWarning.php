<?php
namespace App;

class FuelTankWarning  /*TODO*/{

    /**
     * It should be a private const(ant), but this is impossible in PHP 5.5
     * Maybe it'll be possible in the final version of PHP 7
     */
    const isFull = 100;
    const warnLevel = 5;

    /**
     * Handling a new Value
     *
     * @param $value
     * @throws Exception
     */
    public function newValue($value) {
         /*TODO Activer ou pas la Led en fonction du niveau de Fuel*/
    }

    /**
     * Activating the Fuel Gauge LED
     */
    private function activateLED() {
        echo 'LED: on'."\n";
    }

    /**
     * Deactivating the Fuel Gauge LED
     */
    private function deactivateLED() {
        echo 'LED: off'."\n";
    }
}