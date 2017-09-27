<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\InsertionSort;

class InsertionSortTest extends TestCase
{
    /**
     * @var InsertionSort
     */
    public $object;

    function setUp()
    {
        $this->object = new InsertionSort();
    }

    /**
     * @param array $sortedArray
     * @param array $unsortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testIsInsertionSortWorking($sortedArray, $unsortedArray)
    {
        $this->assertEquals($sortedArray, $this->object->sort($unsortedArray));
    }
}
