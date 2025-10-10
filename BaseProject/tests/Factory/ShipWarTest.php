<?php 

namespace Tests;

use App\Factory\Ship\FactoryMethod2\Factory\HeroShipFactory;
use App\Factory\Ship\FactoryMethod2\Factory\EnnemiShipFactory;
use App\Factory\Ship\FactoryMethod2\Exceptions\ShipUnknownException;
use PHPUnit\Framework\TestCase;

final class ShipWarTest extends TestCase {
    
    public function testCreateHeroShip(): void {
        $ship = HeroShipFactory::create('H');
        $this->assertEquals(100, $ship->getRemainingHealth());
        $this->assertEquals('Hero Ship', $ship->getName());

        $ship = HeroShipFactory::create('M');
        $this->assertEquals(150, $ship->getRemainingHealth());
        $this->assertEquals('Mega Hero Ship', $ship->getName());

        $ship = HeroShipFactory::create('L');
        $this->assertEquals(200, $ship->getRemainingHealth());
        $this->assertEquals('Legendary Hero Ship', $ship->getName());
    }

    public function testCreateUnknownHeroShip(): void {
        $this->expectException(ShipUnknownException::class);
        HeroShipFactory::create('X');
    }

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

    public function testCreateUnknownEnemyShip(): void {
        $this->expectException(ShipUnknownException::class);
        EnnemiShipFactory::create('X');
    }
}