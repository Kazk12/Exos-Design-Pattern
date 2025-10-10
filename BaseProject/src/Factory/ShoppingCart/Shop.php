<?php

namespace App\Factory\ShoppingCart;

use App\Factory\ShoppingCart\Interfaces\ProductFactoryInterface;
use App\Factory\ShoppingCart\Interfaces\ShopFactoryInterface;

class Shop implements ShopFactoryInterface {
    protected $productFactory;
    public function __construct(ProductFactoryInterface $productFactory) {
        $this->productFactory = $productFactory;
    }
    public function listProducts(array $codes) {
        $output = [];
        foreach ($codes as $code) {
            $product = $this->productFactory->createProduct($code);
            $output[] = $product->getShopProductCode() . ' - ' . $product->getShopDescription();
        }
        return implode(PHP_EOL, $output);
    }
}