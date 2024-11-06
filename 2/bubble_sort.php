<?php

function bubbleSort(array $randomList) : array
{
    for ($i = 0; $i <= count($randomList) -1; $i++) {
        for ($j = 0; $j < count($randomList) - $i - 1; $j++) {
            if ($randomList[$j] > $randomList[$j + 1]) {
                $temp = $randomList[$j];
                $randomList[$j] = $randomList[$j + 1];
                $randomList[$j + 1] = $temp;
            }
        }
    }
    return $randomList;
}

print_r(bubbleSort([3,2,4,1,5,7,6,9,8,11,10]));