<?php

namespace App\Builder\Meal;

use App\Builder\Meal\Interfaces\MenuBouffeInterface;

class Menu implements MenuBouffeInterface
{
    private array $items = [];
    private $totalCost = 0;

    public function __construct($items){
        $this->items = $items;
        foreach ($items as $item){
            $this->totalCost += $item->getPrice();
        }
    }

    public function addItem($item): void
    {
        $this->items[] = $item;
        $this->totalCost += $item->getPrice();
    }

    public function getCost(): float
    {
        return $this->totalCost;
    }

    public function getMenuItem($itemName){
        foreach ($this->items as $item) {
            if ($item instanceof $itemName) {
                return $item;
            }
        }
        throw new \Exception("Component not found");
    }

    public function getItems()
    {
        return $this->items;
    }
}