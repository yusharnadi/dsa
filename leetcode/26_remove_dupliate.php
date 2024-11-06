<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(array &$nums) :int {
    $h = [];

    for ($i = 0; $i < count($nums); $i++) {
        $h[$nums[$i]] = $nums[$i];
    }

    $nums = $h;

    return count($nums);
}

$nums = [0,0,1,1,1,2,2,3,3,4];

echo removeDuplicates($nums) .PHP_EOL;
print_r($nums);