<?php

function removeElement(&$nums, $val): int
{
    $h = [];
    $i = 0;

    while ($i < count($nums)) {
        if ($nums[$i] != $val) {
           $h[] = $nums[$i];
        }

        $i++;
    }

    $nums = $h;

    return count($nums);
}

$nums = [0,1,2,2,3,0,4,2];
$val = 2;

echo removeElement($nums, $val) .PHP_EOL;

print_r($nums);