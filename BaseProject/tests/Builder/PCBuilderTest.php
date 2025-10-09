<?php

namespace Tests;

use App\Builder\PCBuilder\Order;
use App\Builder\PCBuilder\Master;
use App\Builder\PCBuilder\PCBuilder;
use App\Builder\PCBuilder\Hardware\Cpu;
use App\Builder\PCBuilder\Hardware\Gpu;
use App\Builder\PCBuilder\Hardware\Ram;
use App\Builder\PCBuilder\Hardware\Ssd;
use App\Builder\PCBuilder\Hardware\Hdd;
use App\Builder\PCBuilder\Hardware\MotherBoard;
use App\Builder\PCBuilder\Interfaces\MasterInterface;
use App\Builder\PCBuilder\Interfaces\ComputerInterface;

use PHPUnit\Framework\TestCase;

class PCBuilderTest extends TestCase
{
    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * @var ComputerInterface
     */
    private $desktop;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new PCBuilder());
        $this->master->getBuilder()
            ->setPart(new Motherboard(Order::MB))
            ->setPart(new Cpu(Order::CPU))
            ->setPart(new Ram(Order::RAM))
            ->setPart(new Gpu(Order::GPU))
            ->setPart(new Ssd(Order::SSD))
            ->setPart(new Hdd(Order::HDD));

        $this->desktop = $this->master->build();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()                                     
    {
        $this->assertEquals(Order::MB, $this->desktop->getComponent(MotherBoard::class)->getValue());
        $this->assertEquals(Order::CPU, $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals(Order::RAM, $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals(Order::GPU, $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals(Order::SSD, $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals(Order::HDD, $this->desktop->getComponent(Hdd::class)->getValue());
    }                                                                            
}