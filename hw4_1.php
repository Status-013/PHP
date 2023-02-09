<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$check = function (int $n): string {
    return $n & 1 ? 'нечетное число' : 'четное число';
};

$result = array_map($check, $arr);
print_r($result);
