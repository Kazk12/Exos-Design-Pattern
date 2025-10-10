<?php

namespace App\Factory\ShoppingCart;

use App\Factory\ShoppingCart\Interfaces\ProductInterface;

// use App\Factory\ShopingCart\ProductFactoryInterface;
// use App\Factory\ShopingCart\ProductInterface;

// use ShopingCartFramework\ProductFactoryInterface;
// use ShopingCartFramework\ProductInterface;


// @TODO implement MyShopProduct

class MyShopProduct implements ProductInterface
{
    private $productCode;
    private $description;

    public function __construct($productCode = null, $description = null)
    {
        $this->productCode = $productCode;
        $this->description = $description;
    }

    public function getShopProductCode()
    {
        return $this->productCode;
    }

    public function getShopDescription()
    {
        return $this->description;
    }

}