<?php 

namespace App\Builder\Hardware;

use App\Builder\Classes\Storage;

class Hdd extends Storage{
    public function __construct($capacity) {
        $this->value = $capacity;
    }
    
}