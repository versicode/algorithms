<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\SelectionSort;
use Versicode\Algorithms\Tests\Helpers\PHPUnitUtils;

class SelectionSortTest extends TestCase
{
    /**
     * @var SelectionSort
     */
    public $object;

    function setUp()
    {
        $this->object = new SelectionSort();
    }

    /**
     * @param array $sortedArray
     * @param array $unsortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testSelectionSortWorking($sortedArray, $unsortedArray)
    {
        $this->assertEquals($sortedArray, $this->object->sort($unsortedArray));
    }

    /**
     * @param array $array
     * @param int $index expected index of minimal element 
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::findMinProvider
     */
    function testFindMinWorking($array, $index)
    {
        $this->assertEquals($index, PHPUnitUtils::callMethod($this->object, 'findMinIndex', [$array]));
    }

}
