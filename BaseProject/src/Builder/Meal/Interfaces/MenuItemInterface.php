<?php


namespace App\Builder\Meal\Interfaces;

interface MenuItemInterface
{
    public function getItems(): array;
    public function getPrice(): float;
}