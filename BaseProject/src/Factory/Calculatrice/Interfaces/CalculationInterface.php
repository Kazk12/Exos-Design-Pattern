<?php

namespace App\Factory\Calculatrice\Interfaces;

interface CalculationInterface {
    public function calculate(float $a, float $b): float;
}
