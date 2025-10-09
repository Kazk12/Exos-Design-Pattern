<?php
namespace App;

  class FuelDisplay /*TODO*/{
    /**
     * Handling a new Value
     *
     * @param $value
     */
    public function newValue($value)
    {
        echo 'Your tank is filled to ' . $value . '%'."\n\n";
    }
}