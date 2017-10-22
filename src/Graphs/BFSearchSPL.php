<?php

namespace Versicode\Algorithms\Graphs;
use SplQueue;

/**
 * Breadth-first search using PHP Standard Library
 */
class BFSearchSPL
{
    /**
     * Find node in graph
     *
     * @param string $item
     * @param array $graph
     */
    public function find($graph, $startNode, $endNode) {
        $searchQueue = new SplQueue();
        $searched = [];

        // Add start node neighbourhoods to queue
        foreach($graph[$startNode] as $value)
            $searchQueue->enqueue($value);

        // While we have items in queue
        while(!$searchQueue->isEmpty()) {
            // Take node from queue
            $node = $searchQueue->dequeue();

            // If node not visited yet
            if(!in_array($node, $searched)) {
                if($node === $endNode) {
                    // Path from $startNode to $endNode found
                    return true;
                } else {
                    // Add current node neighbourhoods to queue
                    foreach($graph[$node] as $value)
                        $searchQueue->enqueue($value);

                    $searched[] = $node;
                }
            }
        }

        // Cannot find path from $startNode to $endNode
        return false;
    }
}
