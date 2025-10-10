<?php 

namespace App\Factory\Ship\FactoryMethod2\Interfaces;

interface HeroShipInterface {
    public function getRemainingHealth(): int;
    public function getName(): string;
}