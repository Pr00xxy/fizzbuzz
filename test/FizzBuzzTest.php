<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function numberDataProvider(): array
    {
        return [
            [
                'numbers' => [
                    1 => 1,
                    2 => 2,
                    3 => 'Fizz',
                    4 => 4,
                    5 => 'Buzz',
                    6 => 'Fizz',
                    7 => 7,
                    8 => 8,
                    9 => 'Fizz',
                    10 => 'Buzz',
                    11 => 11,
                    12 => 'Fizz',
                    13 => 13,
                    14 => 14,
                    15 => 'FizzBuzz',
                    16 => 16,
                    17 => 17,
                    18 => 'Fizz',
                    19 => 19,
                    20 => 'Buzz',
                    21 => 'Fizz',
                    22 => 22,
                    23 => 23,
                    24 => 'Fizz',
                    25 => 'Buzz',
                    26 => 26,
                    27 => 'Fizz',
                    28 => 28,
                    29 => 29,
                    30 => 'FizzBuzz',
                    31 => 31,
                    32 => 32,
                    33 => 'Fizz',
                    34 => 34,
                    35 => 'Buzz',
                    36 => 'Fizz',
                    37 => 37,
                    38 => 38,
                    39 => 'Fizz',
                    40 => 'Buzz'
                ]
            ]
        ];
    }
}
