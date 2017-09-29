<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Recursive\Factorial;

class FactorialTest extends TestCase
{
    /**
     * @var Factorial
     */
    public $object;

    function setUp()
    {
        $this->object = new Factorial();
    }
    function testFactorialWokring()
    {
        $this->assertEquals($this->object->calculate(1), 1);
        $this->assertEquals($this->object->calculate(3), 1*2*3);
        $this->assertEquals($this->object->calculate(5), 1*2*3*4*5);
    }
}
