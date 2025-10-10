<?php

namespace App\AbstractFactory\Interfaces;

interface ShopFactoryInterface {
    public function createProduct(string $productCode): ProductInterface;
    public function createShippingMethod(string $name): ShippingMethodInterface;
}
