<?php

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$resarray = [];

for ($i = 0; $i < 10; $i++) {
    $resarray[$i] = $array1[$i] * $array2[$i];
}

print_r($resarray);
