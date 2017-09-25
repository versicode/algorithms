<?php

namespace Versicode\Algorithms\Sorting;

/**
 * Selection sort in-place algorithm
 * list() used to swap values
 */
class SelectionSortSwap
{
    public function sort($array)
    {
        $arrayaySize = count($array);

        for($i = 0; $i < $arrayaySize; $i++) {
            $minIndex = $i;

            for($k = $i + 1; $k < $arrayaySize; $k++) {
                if($array[$k] < $array[$minIndex]) {
                    $minIndex = $k;
                }
            }

            if($minIndex !== $i) list($array[$i], $array[$minIndex]) = [$array[$minIndex], $array[$i]];
        }

        return $array;
    }
}
