<?php

namespace Versicode\Algorithms\Recursive;

/**
 * Find maximum value from array using recursion
 */
class FindMax
{
    public function find($array)
    {
        if(empty($array)) return false;

        $value = array_shift($array);
        $newValue = $this->find($array);

        if($value < $newValue) {
            return $newValue;
        } else {
            return $value;
        }
    }
}
