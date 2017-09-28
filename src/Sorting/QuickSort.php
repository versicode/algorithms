<?php

namespace Versicode\Algorithms\Sorting;

/**
 * Quicksort algorithm
 */
class QuickSort
{
    public function sort($array)
    {
        if(empty($array)) return [];

        $left = $right = [];
        $midIndex = floor((count($array) - 1) / 2);
        $midValue = $array[$midIndex];

        foreach ($array as $key => $value) {
            if($value > $midValue)
                $right[] = $value;
            elseif($value < $midValue)
                $left[] = $value;
        }

        return array_merge($this->sort($left), [$midValue], $this->sort($right));
    }
}
