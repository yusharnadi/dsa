<?php
function selectionSort(array $data) :array {

    for($i = 0; $i < count($data) -1; $i++){
        $minIndex = $i;

        for ($j = $i+1; $j < count($data); $j++){
            if($data[$j] < $data[$minIndex]) $minIndex = $j;
        }

        $temp = $data[$i];
        $data[$i] = $data[$minIndex];
        $data[$minIndex] = $temp;
    }

     return $data;
}

print_r(selectionSort([2,3,4,1]));