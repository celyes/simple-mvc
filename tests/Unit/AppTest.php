<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use Celyes\SimpleMVC\App;

class AppTest extends TestCase
{

    /**
     * @test
     * add and test a new value
     */
    public function testGet()
    {
        App::bind("key", "value");
        $this->assertEquals(App::get("key"), "value");
    }
    /**
     * @test 
     * test a value that does not exist in the dependency injection container
     */
    public function testKeyNotFound()
    {
        $this->expectException(\Celyes\SimpleMVC\Exceptions\KeyNotFoundException::class);
        App::get("keyThatDoesNotExists", "ValueThatDoesNotExist");
    }
}
