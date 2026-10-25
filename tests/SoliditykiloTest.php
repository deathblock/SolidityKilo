<?php
/**
 * Tests for SolidityKilo
 */

use PHPUnit\Framework\TestCase;
use Soliditykilo\Soliditykilo;

class SoliditykiloTest extends TestCase {
    private Soliditykilo $instance;

    protected function setUp(): void {
        $this->instance = new Soliditykilo(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditykilo::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
