<?php

namespace App\AbstractFactory\Interfaces;

interface ProductInterface {
    public function getShopProductCode(): string;
    public function getShopDescription(): string;
    public function getWeight(): int;
}
