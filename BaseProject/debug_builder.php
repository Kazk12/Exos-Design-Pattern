<?php
require __DIR__ . '/vendor/autoload.php';

use App\Builder\Master;
use App\Builder\PCBuilder;
use App\Builder\Hardware\Motherboard;
use App\Builder\Hardware\Cpu;
use App\Builder\Hardware\Ram;
use App\Builder\Hardware\Gpu;
use App\Builder\Hardware\Ssd;
use App\Builder\Hardware\Hdd;
use App\Builder\Order;

$m = new Master();
$m->setBuilder(new PCBuilder());
$m->getBuilder()
    ->setPart(new Motherboard(Order::MB))
    ->setPart(new Cpu(Order::CPU))
    ->setPart(new Ram(Order::RAM))
    ->setPart(new Gpu(Order::GPU))
    ->setPart(new Ssd(Order::SSD))
    ->setPart(new Hdd(Order::HDD));

$d = $m->build();

$parts = [Motherboard::class, Cpu::class, Ram::class, Gpu::class, Ssd::class, Hdd::class];
foreach ($parts as $p) {
    $exists = $d->getComponent($p) !== null ? 'yes' : 'NO';
    echo basename(str_replace('\\\\','\\', $p)) . ": " . $exists . PHP_EOL;
}
