<?php

namespace Versicode\Algorithms\Sorting;

/**
 * Selection sort algorithm
 * Additional function-helper used to find minial value in array
 */
class SelectionSort
{
    public function sort($array)
    {
        $resultArray = [];
        $arraySize = count($array);

        for($i = 0; $i < $arraySize; $i++) {
            $minIndex = $this->findMinIndex($array);

            array_push($resultArray, array_splice($array, $minIndex, 1)[0]);
        }

        return $resultArray;
    }

    /**
     * Finds index of mininmal value in array
     *
     * @param array $array of integers
     */
    private function findMinIndex($array) {
        $minIndex = 0;
        $arraySize = count($array);

        for($i = 1; $i < $arraySize; $i++) {
            if($array[$i] < $array[$minIndex]) $minIndex = $i;
        }

        return $minIndex;
    }
}
