<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Calculatrice\Factory\AdditionFactory;
use App\Factory\Calculatrice\Factory\SoustractionFactory;
use App\Factory\Calculatrice\Operation\AdditionCalculation;
use App\Factory\Calculatrice\Operation\SoustractionCalculation;
use App\Factory\Calculatrice\Interfaces\CalculationInterface;

final class OperationFactoryTest extends TestCase
{
    public function testAdditionFactoryCreatesCorrectInstance(): void
    {
        
        $factory = new AdditionFactory();
        $operation = $factory->calculationType();

        $this->assertInstanceOf(CalculationInterface::class, $operation);
        $this->assertInstanceOf(AdditionCalculation::class, $operation);
        $this->assertEquals(15, $operation->calculate(10, 5));
    }

    public function testSoustractionFactoryCreatesCorrectInstance(): void
    {
        $factory = new SoustractionFactory();
        $operation = $factory->calculationType();

        $this->assertInstanceOf(CalculationInterface::class, $operation);
        $this->assertInstanceOf(SoustractionCalculation::class, $operation);
        $this->assertEquals(5, $operation->calculate(10, 5));
    }

    public function testCalculationInterfaceMethodExists(): void
    {
        $factory = new AdditionFactory();
        $operation = $factory->calculationType();

        $this->assertTrue(method_exists($operation, 'calculate'), 'Method calculate does not exist in CalculationInterface implementation');
    }
}
