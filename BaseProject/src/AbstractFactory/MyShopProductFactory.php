<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Interfaces\ProductInterface;
use App\AbstractFactory\Interfaces\ShopFactoryInterface;
use App\AbstractFactory\Interfaces\ShippingMethodInterface;

class MyShopProductFactory implements ShopFactoryInterface
{
    private array $productData;
    private array $shippingMethodData;

    public function __construct(array $productData, array $shippingMethodData)
    {
        $this->productData = $productData;
        $this->shippingMethodData = $shippingMethodData;
    }

    public function createProduct($productCode): ProductInterface
    {
        if (!isset($this->productData[$productCode])) {
            throw new \InvalidArgumentException("Unknown product code: $productCode");
        }

        [$name, $weight] = $this->productData[$productCode];

        return new MyShopProduct($productCode, $name, $weight);
    }

    public function createShippingMethod($name): ShippingMethodInterface
    {
        if (!isset($this->shippingMethodData[$name])) {
            throw new \InvalidArgumentException("Unknown shipping method: $name");
        }

        [$milesRate, $weightRate] = $this->shippingMethodData[$name];

        return new MyShippingMethod($name, $milesRate, $weightRate);
    }
}
