<?php


namespace App\Builder\Meal\Abstract;

abstract class AbstractMenuItem
{
	protected float $price;
	protected string $name;

	public function __construct(string $name, float $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPrice(): float
	{
		return $this->price;
	}
}