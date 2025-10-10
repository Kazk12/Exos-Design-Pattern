<?php 

namespace App\Factory\Ship\FactoryMethod2\classes;

use App\Factory\Ship\FactoryMethod2\Interfaces\EnnemiShipInterface;

class EnnemiShip implements EnnemiShipInterface {
    private int $damage;
    private string $name;

    public function __construct(int $damage, string $name) {
        $this->damage = $damage;
        $this->name = $name;
    }

    public function getDamage(): int {
        return $this->damage;
    }

    public function getName(): string {
        return $this->name;
    }
}