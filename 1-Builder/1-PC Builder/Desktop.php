<?php

namespace App\Builder;

use App\Builder\Interfaces\ComputerInterface;

class Desktop implements ComputerInterface
{
    private $components = [];

    public function __construct($part = null)
    {
        if ($part !== null) {
            $this->components[get_class($part)] = $part;
        }
    }

    public function addComponent($part): void
    {
        $key = strtolower(ltrim(get_class($part), '\\'));
        $this->components[$key] = $part;
    }

    public function getComponent($part)
    {
        $key = strtolower(ltrim($part, '\\'));
        return $this->components[$key] ?? null;
    }

}