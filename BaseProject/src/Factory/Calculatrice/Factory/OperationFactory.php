<?php

namespace App\Factory\Calculatrice\Factory;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;

abstract class OperationFactory {
    abstract public function calculationType(): CalculationInterface;
}
