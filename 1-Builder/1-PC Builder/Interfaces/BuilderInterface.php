<?php

namespace App\Builder\Interfaces;

use App\Builder\Abstract\AbstractPart;

interface BuilderInterface{
    public function getComputer();
    public function setPart(AbstractPart $part);
}