<?php

namespace App\Factory\ShoppingCart;

use App\Factory\ShoppingCart\Interfaces\ProductFactoryInterface;






// @TODO implement MyShopProductFactory with internal database of:
//        $database = [
//            'BumperSticker1' => 'Cool bumper sticker',
//            'CoffeeTableBook5' => 'Coffee Table book',
//        ];


class MyShopProductFactory implements ProductFactoryInterface
{
    private $database = [
        'BumperSticker1' => 'Cool bumper sticker',
        'CoffeeTableBook5' => 'Coffee Table book',
    ];

    public function createProduct($productCode)
    {
        if (array_key_exists($productCode, $this->database)) {
            $description = $this->database[$productCode];
            return new MyShopProduct($productCode, $description);
        } else {
            throw new \Exception("Product code not found in database.");
        }
    }
}