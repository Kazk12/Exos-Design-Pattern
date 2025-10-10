<?php declare(strict_types=1);

namespace Tests\Creational;

use App\Singleton\ExosSingleton\Singleton;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase 
{


    public function testThatObjectIsSingleton()
    {
        $first = Singleton::getInstance(); // Create a new instance of Singleton
        $second = Singleton::getInstance(); // Get the same instance of Singleton

        $this->assertSame($first, $second); // Check if both instances are the same

        $this->assertEquals(spl_object_id($first), spl_object_id($second)); // Check if both instances have the same object id
    }

}