<?php declare(strict_types=1);

namespace Tests;


use App\Factory\Shape\ShapeFactory;
use App\Factory\Shape\Circle;
use App\Factory\Shape\Rectangle;
use App\Factory\Shape\Triangle;
use App\Factory\Shape\Exceptions\ShapeUnknownException;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		ShapeFactory::registerShape('rectangle', Rectangle::class);
		$rectangle = ShapeFactory::build('rectangle');
		$this->assertInstanceOf(Rectangle::class, $rectangle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknownException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}
}
