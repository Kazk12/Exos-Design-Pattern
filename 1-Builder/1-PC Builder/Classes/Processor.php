<?php

namespace App\Builder\Classes;

use App\Builder\Abstract\AbstractPart;

class Processor extends AbstractPart{
    public function __construct($processor)
    {
        $this->value = $processor;
    }
}