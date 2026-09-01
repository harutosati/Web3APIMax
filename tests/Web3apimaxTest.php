<?php
/**
 * Tests for Web3APIMax
 */

use PHPUnit\Framework\TestCase;
use Web3apimax\Web3apimax;

class Web3apimaxTest extends TestCase {
    private Web3apimax $instance;

    protected function setUp(): void {
        $this->instance = new Web3apimax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3apimax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
