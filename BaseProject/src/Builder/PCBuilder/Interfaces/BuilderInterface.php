<?php

namespace App\Builder\PCBuilder\Interfaces;

use App\Builder\PCBuilder\Abstract\AbstractPart;

interface BuilderInterface{
    public function getComputer();
    public function setPart(AbstractPart $part);
}