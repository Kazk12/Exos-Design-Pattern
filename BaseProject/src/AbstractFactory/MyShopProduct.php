<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Interfaces\ProductInterface;

class MyShopProduct implements ProductInterface
{
    private string $code;
    private string $description;
    private int $weight;

    public function __construct(string $code, string $description, int $weight)
    {
        $this->code = $code;
        $this->description = $description;
        $this->weight = $weight;
    }

    public function getShopProductCode(): string
    {
        return $this->code;
    }

    public function getShopDescription(): string
    {
        return $this->description;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}
