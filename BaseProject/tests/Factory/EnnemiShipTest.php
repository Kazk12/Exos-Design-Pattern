<?php declare(strict_types=1);

namespace Tests\Creational;

use App\Factory\Ship\FactoryMethod2\Exceptions\ShipUnknownException;
use App\Factory\Ship\FactoryMethod2\Factory\EnnemiShipFactory;
use PHPUnit\Framework\TestCase;

final class EnnemiShipTest extends TestCase {
    
    public function testCreateEnemyShip(): void {
        $ship = EnnemiShipFactory::create('E');
        $this->assertEquals(10, $ship->getDamage());
        $this->assertEquals('Enemy Ship', $ship->getName());

        $ship = EnnemiShipFactory::create('R');
        $this->assertEquals(20, $ship->getDamage());
        $this->assertEquals('Rocket Enemy Ship', $ship->getName());

        $ship = EnnemiShipFactory::create('U');
        $this->assertEquals(30, $ship->getDamage());
        $this->assertEquals('UFO Enemy Ship', $ship->getName());

        $ship = EnnemiShipFactory::create('B');
        $this->assertEquals(40, $ship->getDamage());
        $this->assertEquals('Big UFO Enemy Ship', $ship->getName());
    }

    public function testCreateUnknownShip(): void {
        $this->expectException(ShipUnknownException::class);
        EnnemiShipFactory::create('X');
    }
}