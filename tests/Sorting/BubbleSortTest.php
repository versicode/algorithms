<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Sorting\BubbleSort;
use Versicode\Algorithms\Tests\Helpers\PHPUnitUtils;

class BubbleSortTest extends TestCase
{
    /**
     * @var BubbleSort
     */
    public $bs;

    function setUp()
    {
        $this->bs = new BubbleSort();
    }

    /**
     * @param array $unsortedArray
     * @param array $sortedArray
     *
     * @dataProvider Versicode\Algorithms\Tests\Helpers\DataProvider::sortingAlgorithmProvider
     */
    function testIsBubbleSortWorking($unsortedArray, $sortedArray)
    {
        $this->assertEquals($this->bs->sort($unsortedArray), $sortedArray);
    }
}
