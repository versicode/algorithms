<?php

namespace Versicode\Algorithms\Graphs;

/**
 * Breadth-first search
 */
class BFSearch
{
    /**
     * Find node in graph
     *
     * @param string $item
     * @param array $graph
     */
    public function find($graph, $startNode, $endNode) {
        $searchQueue = [];
        $searched = [];

        // Add start node neighbourhoods to queue
        foreach($graph[$startNode] as $value)
            $searchQueue[] = $value;

        // While we have items in queue
        while($searchQueue) {
            // Take node from queue
            $node = array_shift($searchQueue);

            // If node not visited yet
            if(!in_array($node, $searched)) {
                if($node === $endNode) {
                    // Path from $startNode to $endNode found
                    return true;
                } else {
                    // Add current node neighbourhoods to queue
                    foreach($graph[$node] as $value)
                        $searchQueue[] = $value;

                    $searched[] = $node;
                }
            }
        }

        // Cannot find path from $startNode to $endNode
        return false;
    }
}
