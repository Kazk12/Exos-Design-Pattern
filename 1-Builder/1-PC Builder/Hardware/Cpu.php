<?php

namespace App\Builder\Hardware;

use App\Builder\Classes\Processor;


class Cpu extends Processor {
    public function __construct($model) {
        $this->value = $model;
    }
}