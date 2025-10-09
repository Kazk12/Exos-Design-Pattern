<?php

namespace App\Builder\PCBuilder\Classes;

use App\Builder\PCBuilder\Abstract\AbstractPart;

class Processor extends AbstractPart{
    public function __construct($processor)
    {
        $this->value = $processor;
    }
}