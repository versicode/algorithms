<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Graphs\BFSearch;

class BFSearchTest extends TestCase
{
    /**
     * @var BFSearch
     */
    public $object;

    function setUp()
    {
        $this->object = new BFSearch();
    }

    function testBFSearchWorking()
    {
        $graph = [
            'A' => ['B', 'C', 'D'],
            'B' => ['G', 'H'],
            'C' => ['G'],
            'D' => ['E', 'F'],
            'E' => [],
            'F' => [],
            'G' => [],
            'H' => []
        ];

        $this->assertTrue($this->object->find($graph, 'A', 'H'));

        unset($graph['A'][0]);

        $this->assertFalse($this->object->find($graph, 'A', 'H'));
    }
}
