<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3.6,
        'Алексей Громык' => 4.1,
        'Виталий Кузнецов' => 3.9,
        'Владислав Гусев' => 2.9,
        'Александр Бардин' => 4,
        'Еремин Александр' => 2.2,
        'Светлана Хайрудинова' => 4.8,
        'Алексей Прокофьев' => 3.3,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Дмитрий Буйлин' => 4.8,
        'Анастасия Коропа' => 3.4,
        'Денис Щеглов' => 2.4,
        'Андрей Бобылев' => 3.8,
        'Николай Кутепов' => 4.5,
        'Алексей Бабков' => 3.9,
        'Иван Воробьев' => 4.7,
    ]
];

$studentoff = [];
$groupGrade = 0;
$maxGroupGrade = 0;
$topGroup = '';

foreach ($students as $groupName => $group) {
    $sumGrades = 0;
    foreach ($group as $studentName => $studentGrade) {
        $sumGrades += $studentGrade;
        if ($studentGrade < 3) {
            $studentoff[$groupName][] = $studentName;
        }
    }
    $groupGrade = $sumGrades / count($group);
    if ($groupGrade > $maxGroupGrade) {
        $maxGroupGrade = round($groupGrade, 2);
        $topGroup = $groupName;
    }
}
print("Группа с лучшей успеваемостью: $topGroup со средним баллом $maxGroupGrade
Студенты, поданные на отчисление:" . PHP_EOL);
print_r($studentoff);
