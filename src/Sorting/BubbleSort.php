<?php

namespace Versicode\Algorithms\Sorting;

/**
 * Bubble sort algorithm
 * list() used to swap values
 */
class BubbleSort
{
    public function sort($array)
    {
        do {
            $swaped = false;

            for($i = 0, $c = count($array) - 1; $i < $c; $i++) {
                if($array[$i] > $array[$i + 1]) {
                    list($array[$i + 1], $array[$i]) = [$array[$i], $array[$i + 1]];

                    $swaped = true;
                }
            }
        } while($swaped);

        return $array;
    }
}
