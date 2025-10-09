<?php

namespace App\Builder\PCBuilder\Abstract;

abstract class AbstractPart{
    protected $value;

    public function __construct($value = null)
    {
        if ($value !== null) {
            $this->value = $value;
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}