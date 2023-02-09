<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$item = readline("Введите разыскиваемый предмет:");
function search(string $searchItem, array $searchArray): bool
{
    foreach ($searchArray as $val) {
        if (is_array($val)) {
            if (search($searchItem, $val)) {
                return true;
            }
        } else {
            if ($searchItem === $val) {
                return true;
            }
        }
    }
    return false;
}

echo search($item, $box) ? 'Предмет найден' : 'Такого предмета нет';
