<?php

namespace Tests;

use App\Builder\Meal\Boisson;
use App\Builder\Meal\Burger;
use App\Builder\Meal\Interfaces\MenuInterface;
use App\Builder\Meal\MenuBuilder;
use PHPUnit\Framework\TestCase;


class MealBuilderTest extends TestCase{

    private $builder;
    private $premierMenu;
    private $deuxiemeMenu;

    protected function setUp(): void
    {
        $this->builder = new MenuBuilder();

        $this->premierMenu = $this->builder->addItem(new Burger("Végé", 10))
            ->addItem(new Boisson("Eau", 1))
            ->getMenu();

        $this->builder->reset();

        $this->deuxiemeMenu = $this->builder->addItem(new Burger("Végé", 10))
            ->addItem(new Boisson("Eau", 1))
            ->getMenu();
    }

    public function testInstance() {
        $this->assertInstanceOf(MenuInterface::class, $this->premierMenu);
        $this->assertInstanceOf(MenuInterface::class, $this->deuxiemeMenu);
    }

    public function testAliMents()
    {
        $items1 = $this->premierMenu->getItems();
        $items2 = $this->deuxiemeMenu->getItems();

        // Vérifie que les deux menus ont le même coût total
        $this->assertEquals(
            $this->premierMenu->getCost(),
            $this->deuxiemeMenu->getCost(),
            "Les menus n'ont pas le même coût total"
        );

        // Vérifie que les deux menus contiennent le même nombre d'éléments
        $this->assertCount(
            count($items1),
            $items2,
            "Les menus n'ont pas le même nombre d'éléments"
        );

        // Vérifie que chaque item correspond en nom et prix
        foreach ($items1 as $index => $item) {
            $this->assertEquals($item->getName(), $items2[$index]->getName(), "Nom différent à l'index $index");
            $this->assertEquals($item->getPrice(), $items2[$index]->getPrice(), "Prix différent à l'index $index");
        }
    }
     

}