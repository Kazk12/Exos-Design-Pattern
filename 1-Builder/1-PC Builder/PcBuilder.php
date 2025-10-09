<?php

namespace App\Builder;

use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Desktop;

class PCBuilder implements BuilderInterface{
    
    private $components = [];

    public function getComputer()
    {
        // create a desktop and populate it with collected components
        $desktop = new Desktop(null);
        foreach ($this->components as $part) {
            $desktop->addComponent($part);
        }

        return $desktop;
    }

    public function setPart($part)
    {
        // store components using lowercase fully-qualified class name to avoid case-matching issues
        $key = strtolower(ltrim(get_class($part), '\\'));
        $this->components[$key] = $part;

        // allow chaining
        return $this;
    }

}