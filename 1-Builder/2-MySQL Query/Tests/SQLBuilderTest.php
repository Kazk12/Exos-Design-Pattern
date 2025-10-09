<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Builder\MySQLQuery;

final class SQLBuilderTest extends TestCase {

	public function testThatBuilderWorks()
	{
		$builder = new MySQLQuery();
		$query = $builder->select('products', ['name', 'price'])
		->limit(5, 10)
		->get();

        $this->assertTrue(method_exists($builder, 'reset'), 'Class does not have method reset');
        $this->assertTrue(method_exists($builder, 'select'), 'Class does not have method select');
        $this->assertTrue(method_exists($builder, 'where'), 'Class does not have method where');
        $this->assertTrue(method_exists($builder, 'limit'), 'Class does not have method limit');
        $this->assertTrue(method_exists($builder, 'get'), 'Class does not have method get');


        $this->assertEquals($query, "SELECT name, price FROM products LIMIT 5, 10");


    }

}