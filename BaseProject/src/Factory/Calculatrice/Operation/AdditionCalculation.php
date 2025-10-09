<?php

namespace App\Factory\Calculatrice\Operation;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;

class AdditionCalculation implements CalculationInterface {
    public function calculate(float $a, float $b): float {
        return $a + $b;
    }
}
