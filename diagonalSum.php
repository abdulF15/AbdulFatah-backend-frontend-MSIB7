<?php


function diagonalSum($number)
{
    $sum = 0;
    for ($i = 0; $i < count($number); $i++) {
        for ($j = 0; $j < count($number[$i]); $j++) {
            if ($i == $j || $i + $j == count($number) - 1) {
                $sum += $number[$i][$j];
            }
        }
    }

    return $sum;
}


echo  diagonalSum([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]);

echo diagonalSum([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16],
]);
