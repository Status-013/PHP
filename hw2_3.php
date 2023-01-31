<?php

while (true) {
    $number = (int)readline("Введите целое положительное число: ");
    if ($number > 5) {
        $finger = 4;
        $inc = -1;
        for ($i = 6; $i < $number; $i++) {
            $finger += $inc;
            if ($finger == 5) {
                $inc = -1;
            } elseif ($finger == 1) {
                $inc = 1;
            }
        }
        break;
    } else {
        $finger = $number;
        break;
    }
}
switch ($finger) {
    case '1':
        echo 'Выбран большой палец';
        break;
    case '2':
        echo 'Выбран указательный палец';
        break;
    case '3':
        echo 'Выбран средний палец';
        break;
    case '4':
        echo 'Выбран безымянный палец';
        break;
    case '5':
        echo 'Выбран мизинец';
        break;
}
