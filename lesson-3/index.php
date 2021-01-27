<?php
//Задание 1
echo '<b> Начало задания №1 <br></b>';
$i = 0;
while ($i <= 100) {
    if ($i % 3 === 0) {
        echo $i . ' ';
    }
    $i++;
}
echo '<b><br> Конец задания №1 </b>';
//Задание 2
echo '<b> Начало задания №2 <br></b>';
$i = 0;
do {
    if ($i === 0) {
        echo "{$i} - Это ноль ";
    } elseif ($i % 2 === 0) {
        echo "{$i} - Это четное ";
    } else {
        echo "{$i} - Это нечетное ";
    }
    $i++;
} while ($i <= 10);
echo '<b><br> Конец задания №2 </b>';
//Задание 3
echo '<b> Начало задания №3 <br></b>';
$cities = [
    'Московская область' =>
        [
            'Москва', 'Зеленоград', 'Клин'
        ],
    'Ленинградская область' =>
        [
            'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'
        ],
    'Рязанская область' =>
        [
            'Рязань', 'Скопин', 'Касимов'
        ]
];

foreach ($cities as $region => $city) {
    foreach ($city as $item) {
        $str .= $item . ',';
    }
    $str[strlen($str) - 1] = '.';
    echo "{$region}:<br>{$str}<br>";
    $str = '';
}
echo '<b><br> Конец задания №3<br> </b>';
//Задание 8
echo '<b> Начало задания №8 <br></b>';

foreach ($cities as $region => $city) {
    foreach ($city as $item) {
        if (mb_substr($item, 0, 1) == 'К') {
            $str .= $item . ',';
        }
    }
    $str[strlen($str) - 1] = '.';
    echo "{$region}:<br>{$str}<br>";
    $str = '';
}
echo '<b><br> Конец задания №8 </b>';
//Задание 4



function translate (string $string) : string {
    $alphabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $string = strtr($string, $alphabet);
    return $string;
}

echo translate('Привет');