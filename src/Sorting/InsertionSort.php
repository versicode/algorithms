<?php

namespace Versicode\Algorithms\Sorting;

/**
 * Insertion sort algorithm
 */
class InsertionSort
{
    public function sort($array)
    {
        $length = count($array);

        for($i = 1; $i < $length; $i++) {
            $element = $array[$i];
            $j = $i - 1;

            while($j >= 0 && $array[$j] > $element) {
                $array[$j + 1] = $array[$j];
                $j = $j - 1;
            }

            $array[$j + 1] = $element;
        }

        return $array;
    }
}
