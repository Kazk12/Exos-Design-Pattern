<?php 

namespace App\Factory\Ship\FactoryMethod2\Factory;

use App\Factory\Ship\FactoryMethod2\Interfaces\EnnemiShipInterface;
use App\Factory\Ship\FactoryMethod2\classes\EnnemiShip;
use App\Factory\Ship\FactoryMethod2\Exceptions\ShipUnknownException;

class EnnemiShipFactory {
    public static function create(string $type): EnnemiShipInterface {
        return match($type) {
            'E' => new EnnemiShip(10, 'Enemy Ship'),
            'R' => new EnnemiShip(20, 'Rocket Enemy Ship'),
            'U' => new EnnemiShip(30, 'UFO Enemy Ship'),
            'B' => new EnnemiShip(40, 'Big UFO Enemy Ship'),
            default => throw new ShipUnknownException("Ship type '$type' is unknown."),
        };
    }
}