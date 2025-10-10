<?php 

namespace App\Factory\Ship\FactoryMethod2\Factory;

use App\Factory\Ship\FactoryMethod2\Interfaces\HeroShipInterface;

use App\Factory\Ship\FactoryMethod2\classes\HeroShip;

class HeroShipFactory {
    public static function create(string $type): HeroShipInterface {
        return match($type) {
            'H' => new HeroShip(100, 'Hero Ship'),
            'M' => new HeroShip(150, 'Mega Hero Ship'),
            'L' => new HeroShip(200, 'Legendary Hero Ship'),
            default => throw new \App\Factory\Ship\FactoryMethod2\Exceptions\ShipUnknownException($type),
        };
    }
}