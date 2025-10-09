<?php


namespace App\Builder\Meal\Interfaces;

interface MenuInterface
{
   public function addItem($item): void;

    public function getCost(): float;

    public function getMenuItem($itemName);

    public function getItems();
}