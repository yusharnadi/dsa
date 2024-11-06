<?php

function combineSortedAray(array $data_1, array $data_2): array
{
    $result = [];

    $n = count($data_1);

    for ($i = 0; $i < $n; $i++) {
        if ($data_1[$i] < $data_2[$i]) {
            $result[] = $data_1[$i];
            $result[] = $data_2[$i];
        } else {
            $result[] = $data_2[$i];
            $result[] = $data_1[$i];
        }
    }

    return $result;
}


print_r(combineSortedAray([1, 5, 9], [2, 6, 10]));
$merge = array_merge([1, 5, 9], [2, 6, 10]);
sort($merge);
print_r($merge);
