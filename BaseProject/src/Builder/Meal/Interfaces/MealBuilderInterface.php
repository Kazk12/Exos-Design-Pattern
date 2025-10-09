<?php

namespace App\Builder\Meal\Interfaces;


interface MealBuilderInterface
{
    public function addBurger(string $name, float $price): self;
    public function addBoisson(string $name, float $price): self;
    public function addDessert(string $name, float $price): self;
    // public function getMeal(): Meal;
}