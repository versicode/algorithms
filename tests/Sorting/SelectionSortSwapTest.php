<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\SelectionSortSwap;

class SelectionSortSwapTest extends TestCase
{
    /**
     * @var SelectionSortSwap
     */
    public $object;

    function setUp()
    {
        $this->object = new SelectionSortSwap();
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
}
