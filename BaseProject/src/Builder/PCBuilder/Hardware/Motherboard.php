<?php

namespace App\Builder\PCBuilder\Hardware;

use App\Builder\PCBuilder\Abstract\AbstractPart;

class Motherboard extends AbstractPart
{
    public function __construct($chipset) {
        $this->value = $chipset;
    }
}