<?php

use PHPUnit\Framework\TestCase;
use Versicode\Algorithms\Graphs\BFSearchSPL;

class BFSearchSPLTest extends TestCase
{
    /**
     * @var BFSearchSPL
     */
    public $object;

    function setUp()
    {
        $this->object = new BFSearchSPL();
    }

    function testBFSearchSPLWorking()
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
