<?php

namespace App\Builder\Meal;

use App\Builder\Meal\Abstract\AbstractMenuItem;

class MenuBuilder
{
    private $items = [];

    public function addItem(AbstractMenuItem $item)
    {
        $this->items[] = $item;
        return $this;
    }

    public function getMenu()
    {
        return new Menu($this->items);
    }

    public function reset(){
        $this->items = [];
    }
}