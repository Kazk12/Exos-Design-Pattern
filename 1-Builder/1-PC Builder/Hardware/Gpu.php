<?php 

namespace App\Builder\Hardware;

use App\Builder\Classes\Processor;

class Gpu extends Processor {
    public function __construct($model) {
        $this->value = $model;
    }
    
}