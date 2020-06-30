<?php 

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Core\App;
use App\Core\Exceptions\KeyNotFoundException;

class AppTest extends TestCase {

    /**
     * @test
     */
    public function testGet() 
    {
        $app = new App;
        App::bind("key", "value");
        $this->assertEquals(App::get("key"), "value");
    }
    /**
     * @test
     */
    public function testKeyNotFound() 
    {
        $this->expectException(KeyNotFoundException::class);
        $app = new App;
        App::get("keyThatDoesNotExists", "ValueThatDoesNotExist");
    }
}