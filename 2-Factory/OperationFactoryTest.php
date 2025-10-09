<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\AdditionFactory;
use App\Factory\SoustractionFactory;
use App\Interfaces\CalculationInterface;
use App\Operation\AdditionCalculation;
use App\Operation\SoustractionCalculation;


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
