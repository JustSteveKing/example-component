<?php

declare(strict_types=1);

namespace Tests;

use ArgumentCountError;
use PHPUnit\Framework\TestCase;
use JustSteveKing\Example\Component;

class ComponentTest extends TestCase
{
    /**
     * @var Component
     */
    protected $component;

    /**
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $this->component = new Component();
    }

    /**
     * @test
     */
    public function test_component_requires_argument()
    {
        $this->expectException(ArgumentCountError::class);
        $this->component->hello();
    }

    /**
     * @test
     */
    public function test_component_returns_string()
    {
        $this->assertIsString($this->component->hello('test'));
    }
}
