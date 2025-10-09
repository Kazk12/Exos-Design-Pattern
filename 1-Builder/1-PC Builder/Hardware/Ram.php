<?php 

namespace App\Builder\Hardware;

class Ram extends \App\Builder\Abstract\AbstractPart{
    public function __construct($size) {
        $this->value = $size;
    }
    
}