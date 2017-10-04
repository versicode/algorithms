<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Recursive\FindMax;

class FindMaxTest extends TestCase
{
    /**
     * @var RecursiveMax
     */
    public $object;

    function setUp()
    {
        $this->object = new FindMax();
    }

    /**
     * @param array $array
     * @param array $maxValue
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::findMaxValueProvider
     */
    function testIsFindMaxWorking($array, $maxValue)
    {
        $this->assertEquals($this->object->find($array), $maxValue);
    }
}
