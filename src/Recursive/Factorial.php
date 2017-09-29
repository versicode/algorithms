<?php

namespace Versicode\Algorithms\Recursive;

/**
 * Find factorial of number using recursion
 */
class Factorial
{
    public function calculate(int $x)
    {
        if($x === 1) return 1;
        return $x * $this->calculate($x - 1);
    }
}
