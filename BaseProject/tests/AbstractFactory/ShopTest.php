<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\AbstractFactory\Shop;
use App\AbstractFactory\MyShopProductFactory;

final class ShopTest extends TestCase
{
    public function testProductListWithShippingCost(): void
    {
        // 1. Données de test
        $productData = [
            'BumperSticker1' => ['Bumper Sticker Item #1', 1],
            'CoffeeTableBook6' => ['Coffee Table Book Item #6 (500 pages)', 5],
        ];

        $shippingMethodData = [
            'UPS' => [1.4, 1.1],
        ];

        // 2. Factory concrète
        $factory = new MyShopProductFactory($productData, $shippingMethodData);

        // 3. Framework Shop avec la factory
        $shop = new Shop($factory);

        // 4. Appel méthode à tester
        $result = $shop->listProductsWithShippingCost(['BumperSticker1', 'CoffeeTableBook6'], 'UPS', 10);

        // 5. Résultat attendu
        $expected = <<<EOS
BumperSticker1 - Bumper Sticker Item #1 / via: UPS, cost: \$15.1
CoffeeTableBook6 - Coffee Table Book Item #6 (500 pages) / via: UPS, cost: \$19.5
EOS;

        // 6. Assertion
        $this->assertEquals($expected, $result);
    }
}
