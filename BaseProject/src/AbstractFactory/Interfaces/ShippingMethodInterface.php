<?php

namespace App\AbstractFactory\Interfaces;

interface ShippingMethodInterface {
    public function getName(): string;
    public function getCostEstimate(int $miles, ProductInterface $product): float;
}
