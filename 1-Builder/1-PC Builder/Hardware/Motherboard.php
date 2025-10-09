<?php

namespace App\Builder\Hardware;

use App\Builder\Abstract\AbstractPart;

class Motherboard extends AbstractPart
{
    public function __construct($chipset) {
        $this->value = $chipset;
    }
}