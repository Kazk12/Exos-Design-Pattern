<?php 

namespace App\Builder\PCBuilder\Hardware;

use App\Builder\PCBuilder\Classes\Storage;

class Ssd extends Storage{
    public function __construct($capacity) {
        $this->value = $capacity;
    }
    
}