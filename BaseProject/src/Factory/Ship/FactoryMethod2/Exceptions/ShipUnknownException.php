<?php 

namespace App\Factory\Ship\FactoryMethod2\Exceptions;

use Exception;

class ShipUnknownException extends Exception {
	
    protected $message = 'Unknown ship type';

    public function __construct($shipType)
    {
        $this->message = "Unknown ship type: " . $shipType;
    }

    public function getShipType()
    {
        return $this->message;
    }
} 