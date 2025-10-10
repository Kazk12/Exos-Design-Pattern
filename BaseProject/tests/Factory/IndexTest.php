<?php

namespace Tests;

use App\Factory\ShoppingCart\Shop;
use App\Factory\ShoppingCart\MyShopProductFactory;

class IndexTest extends \PHPUnit\Framework\TestCase {

	public function testListProducts() {
		$shop = new Shop(new MyShopProductFactory);

		$productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

		$targetOutput = <<<EOS
BumperSticker1 - Cool bumper sticker
CoffeeTableBook5 - Coffee Table book
EOS;

		$this->assertEquals($targetOutput, $shop->listProducts($productsToList));
	}
}