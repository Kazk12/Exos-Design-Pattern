<?php 

namespace App\Builder\Hardware;

use App\Builder\Classes\Storage;

class Ssd extends Storage{
    public function __construct($capacity) {
        $this->value = $capacity;
    }
    
}