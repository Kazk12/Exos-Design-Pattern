<?php

namespace App\Builder\PCBuilder\Interfaces;

interface MasterInterface{
    public function build();
    public function setBuilder(BuilderInterface $builder);
    public function getBuilder(): BuilderInterface;
}