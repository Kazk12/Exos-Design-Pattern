<?php

namespace App\Builder\PCBuilder\Hardware;

use App\Builder\PCBuilder\Classes\Processor;


class Cpu extends Processor {
    public function __construct($model) {
        $this->value = $model;
    }
}