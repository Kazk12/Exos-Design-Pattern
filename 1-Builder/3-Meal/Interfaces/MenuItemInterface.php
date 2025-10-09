<?php


namespace App\Builder\Meal\Interfaces;

interface MenuInterface
{
    public function getItems(): array;
    public function getPrice(): float;
}