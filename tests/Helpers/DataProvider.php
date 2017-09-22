<?php

namespace Versicode\Algorithms\Tests\Helpers;

class DataProvider
{
    public static function sortingAlgorithmProvider()
    {
        return [
            'positiveNumbers' => [
                [3, 5, 6, 2, 1], [1, 2, 3, 5, 6]
            ],
            'positiveWithNegativeNumbers' => [
                [8, 5, 1, -4, 9], [-4, 1, 5, 8, 9]
            ]
        ];
    }
}
