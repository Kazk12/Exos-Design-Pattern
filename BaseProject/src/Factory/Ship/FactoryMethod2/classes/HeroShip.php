<?php 

namespace App\Factory\Ship\FactoryMethod2\classes;

use App\Factory\Ship\FactoryMethod2\Interfaces\HeroShipInterface;

class HeroShip implements HeroShipInterface {
    private int $remainingHealth;
    private string $name;

    public function __construct(int $remainingHealth, string $name) {
        $this->remainingHealth = $remainingHealth;
        $this->name = $name;
    }

    public function getRemainingHealth(): int {
        return $this->remainingHealth;
    }

    public function getName(): string {
        return $this->name;
    }
}