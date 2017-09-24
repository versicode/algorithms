<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\SelectionSort;
use Versicode\Algorithms\Tests\Helpers\PHPUnitUtils;

class SelectionSortTest extends TestCase
{
    /**
     * @var SelectionSort
     */
    public $s;

    function setUp()
    {
        $this->s = new SelectionSort();
    }

    /**
     * @param array $unsortedArray
     * @param array $sortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testSelectionSortWorking($unsortedArray, $sortedArray)
    {
        $this->assertEquals($this->s->sort($unsortedArray), $sortedArray);
    }

    /**
     * @param array $array
     * @param int $index expected index of minimal element 
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::findMinProvider
     */
    function testFindMinWorking($array, $index)
    {
        $this->assertEquals(PHPUnitUtils::callMethod($this->s, 'findMinIndex', [$array]), $index);
    }

}
