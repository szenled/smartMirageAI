<?php
/**
 * Tests for smartMirage
 */

use PHPUnit\Framework\TestCase;
use Smartmirage\Smartmirage;

class SmartmirageTest extends TestCase {
    private Smartmirage $instance;

    protected function setUp(): void {
        $this->instance = new Smartmirage(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartmirage::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
