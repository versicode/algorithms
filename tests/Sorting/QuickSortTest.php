<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\QuickSort;

class QuickSortTest extends TestCase
{
    /**
     * @var QuickSort
     */
    public $object;

    function setUp()
    {
        $this->object = new QuickSort();
    }

    /**
     * @param array $sortedArray
     * @param array $unsortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testIsQuickSortWorking($sortedArray, $unsortedArray)
    {
        $this->assertEquals($sortedArray, $this->object->sort($unsortedArray));
    }
}
