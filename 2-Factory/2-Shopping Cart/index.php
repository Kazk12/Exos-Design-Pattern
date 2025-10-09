<?php



use ShopingCartFramework\Shop;
use MyCompanyShop\MyShopProductFactory;
    
$shop = new Shop(new MyShopProductFactory);

$productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

$targetOutput = <<<EOS
BumperSticker1 - Cool bumper sticker
CoffeeTableBook5 - Coffee Table book
EOS;

assert($targetOutput == $shop->listProducts($productsToList));