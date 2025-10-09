<?php 

namespace App\Builder\PCBuilder\Hardware;

use App\Builder\PCBuilder\Classes\Storage;

class Hdd extends Storage{
    public function __construct($capacity) {
        $this->value = $capacity;
    }
    
}