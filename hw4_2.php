<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = function (array $n): array {
    return [
        'max' => max($n),
        'min' => min($n),
        'avg' => array_sum($n) / count($n),
    ];
};

print_r($result($arr));
