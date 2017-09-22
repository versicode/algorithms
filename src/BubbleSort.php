<?php

namespace Versicode\Algorithms;

/**
 * Bubble sort algorithm
 * list() used to swap values
 */
class BubbleSort
{
    public function sort($arr)
    {
        do {
            $swaped = false;

            for($i = 0, $c = count($arr) - 1; $i < $c; $i++) {
                if($arr[$i] > $arr[$i + 1]) {
                    list($arr[$i + 1], $arr[$i]) = [$arr[$i], $arr[$i + 1]];

                    $swaped = true;
                }
            }
        } while($swaped);

        return $arr;
    }
}
