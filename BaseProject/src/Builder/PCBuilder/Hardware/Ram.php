<?php 

namespace App\Builder\PCBuilder\Hardware;

class Ram extends \App\Builder\PCBuilder\Abstract\AbstractPart{
    public function __construct($size) {
        $this->value = $size;
    }
    
}