<?php 

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Core\App;

class AppTest extends TestCase {

    /**
     * @test
     */
    public function testGetMethod() {
        $app = new App;
        App::bind("key", "value");
        $this->assertEquals(App::get("key"), "value");
    }

}