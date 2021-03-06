<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\BubbleSort;

class BubbleSortTest extends TestCase
{
    /**
     * @var BubbleSort
     */
    public $object;

    function setUp()
    {
        $this->object = new BubbleSort();
    }

    /**
     * @param array $sortedArray
     * @param array $unsortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testIsBubbleSortWorking($sortedArray, $unsortedArray)
    {
        $this->assertEquals($sortedArray, $this->object->sort($unsortedArray));
    }
}
