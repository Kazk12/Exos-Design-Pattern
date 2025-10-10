<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Interfaces\ShopFactoryInterface;

class Shop {
    protected ShopFactoryInterface $shopFactory;

    public function __construct(ShopFactoryInterface $shopFactory)
    {
        $this->shopFactory = $shopFactory;
    }

    public function listProductsWithShippingCost(array $codes, string $shippingMethodName, int $miles): string
    {
        $output = [];

        foreach ($codes as $code) {
            $product = $this->shopFactory->createProduct($code);
            $shippingMethod = $this->shopFactory->createShippingMethod($shippingMethodName);

            $output[] = $product->getShopProductCode() . ' - '
                . $product->getShopDescription() . ' / via: '
                . $shippingMethod->getName() . ', cost: $'
                . $shippingMethod->getCostEstimate($miles, $product);
        }

        return implode(PHP_EOL, $output);
    }
}
