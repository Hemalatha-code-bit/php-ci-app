<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/index.php';

class IndexTest extends TestCase {
    public function testAdd() {
        $this->assertEquals(4, add(2, 2));
    }
}
