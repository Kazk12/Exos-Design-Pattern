<?php
namespace App\Builder\Classes;

use App\Builder\Abstract\AbstractPart;

class Storage extends AbstractPart{
    public function __construct($volume){
        $this->value = $volume;
    }
}