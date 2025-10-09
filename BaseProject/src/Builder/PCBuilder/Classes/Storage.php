<?php
namespace App\Builder\PCBuilder\Classes;

use App\Builder\PCBuilder\Abstract\AbstractPart;

class Storage extends AbstractPart{
    public function __construct($volume){
        $this->value = $volume;
    }
}