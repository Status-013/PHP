<?php

$name = readline("Введите Ваше имя:");
$qtask = (int)readline("Введите колличество планируемых задач:");
if ($qtask > 0) {
    (string)$list = '';
    $sum = 0;
    for ($i = 0; $i < $qtask; $i++) {
        $task = readline("Какая задача стоит перед вами сегодня? ");
        $time = readline("Сколько примерно часов эта задача займет? ");
        $list = "$list$task   :   $time ч.\n";
        $sum += $time;
    }
}

echo ("\n$name, сегодня у вас запланировано $qtask приоритетных задачи на день:"
    . PHP_EOL . $list
    . PHP_EOL . "Примерное время выполнения плана $sum ч.");
