<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Interfaces\ShippingMethodInterface;
use App\AbstractFactory\Interfaces\ProductInterface;

class MyShippingMethod implements ShippingMethodInterface
{
    private string $name;
    private float $milesRate;
    private float $weightRate;

    public function __construct(string $name, float $milesRate, float $weightRate)
    {
        $this->name = $name;
        $this->milesRate = $milesRate;
        $this->weightRate = $weightRate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCostEstimate($miles, ProductInterface $product): float
    {
        $weight = $product->getWeight();

        return round((($miles) * $this->milesRate) + ($weight * $this->weightRate), 1);
    }
}
