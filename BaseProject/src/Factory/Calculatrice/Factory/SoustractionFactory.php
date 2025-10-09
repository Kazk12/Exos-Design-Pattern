<?php

namespace App\Factory\Calculatrice\Factory;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;
use App\Factory\Calculatrice\Operation\SoustractionCalculation;

class SoustractionFactory extends OperationFactory {
    public function calculationType(): CalculationInterface {
        return new SoustractionCalculation();
    }
}
