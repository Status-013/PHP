<?php
while (true) {
    $answer = (int)readline("В каком году произошло крещение Руси? \n" .
        "1: 810 \n" .
        "2: 988 \n" .
        "3: 740 " . PHP_EOL);
    if ($answer === 988) {
        echo 'Правильно';
        break;
    }
    if ($answer === 740) {
        echo 'Вы ошиблись';
        break;
    }
    if ($answer === 810) {
        echo 'Вы ошиблись';
        break;
    }
}
