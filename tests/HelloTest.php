<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Hello.php';

class HelloTest extends TestCase {
    public function testGreet() {
        $hello = new Hello();
        $this->assertEquals("Hello, Hemalatha!", $hello->greet("Hemalatha"));
    }
}
