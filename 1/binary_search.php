<?php

function binarySearch(int $target, array $data): int
{

    $start = 0;
    $end = count($data) - 1;

    while ($start <= $end) {
        $mid = intval(($start + $end) / 2);

        if ($data[$mid] === $target) {
            return $mid;
        }

        if ($target > $data[$mid]) {
            $start = $mid + 1;
        }

        if ($target < $data[$mid]) {
            $end = $mid - 1;
        }
    }

    return -1;
}

echo binarySearch(11, [1, 2, 3, 4, 5, 6, 7, 8, 10]) . PHP_EOL;
