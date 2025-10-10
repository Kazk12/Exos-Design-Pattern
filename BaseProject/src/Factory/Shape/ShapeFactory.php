<?php 

namespace App\Factory\Shape;

use App\Factory\Shape\Exceptions\ShapeUnknownException;
use App\Factory\Shape\Interfaces\ShapeInterface;

class ShapeFactory
{
    private static array $registry = [];
	

    public static function registerShape(string $key, string $shapeClass): void
    {
        if (!class_exists($shapeClass)) {
            throw new \InvalidArgumentException("Shape class '$shapeClass' does not exist.");
        }

        if (!in_array(ShapeInterface::class, class_implements($shapeClass))) {
            throw new \InvalidArgumentException("Shape class '$shapeClass' must implement ShapeInterface.");
        }

        self::$registry[$key] = $shapeClass;
    }

	

    public static function build(string $shape): ShapeInterface
    {
        if (!isset(self::$registry[$shape])) {
        throw new ShapeUnknownException("Unknown shape: $shape");
    }

        $shapeClass = self::$registry[$shape];
        return new $shapeClass();
    }
}
