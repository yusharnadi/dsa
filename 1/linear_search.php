<?php

function linearSearch(string $target, array $data): int
{

    foreach ($data as $key => $value) {
        if ($value === $target) {
            return $key;
        }
    }

    return -1;
}

echo linearSearch('susu', ['asi', 'hello', 'nbudio', 'susul', 'sasa', 'dana', 'asusu', 'uyeee']) . PHP_EOL;
