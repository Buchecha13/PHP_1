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
echo '<b><br> Конец задания №1 <br></b>';
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
echo '<b><br> Конец задания №2 <br></b>';
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
    $str = '';
    foreach ($city as $item) {
        if (mb_substr($item, 0, 1) == 'К') {
            $str .= $item . ',';
        }
    }
//    $str[strlen($str) - 1] = '.';
    $str = mb_substr($str, 0, -1). '.';
    echo "{$region}:<br>{$str}<br>";

}
echo '<b><br> Конец задания №8 </b>';
//Задание 4
echo '<b> Начало задания №4 <br></b>';
function translate(string $string): string
{
    $alphabet = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];

    $result = '';
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $letter = mb_substr($string, $i, 1);
        if (isset($alphabet[mb_strtolower($letter)])) {
            if ($letter === mb_strtolower($letter)) {
                $latinLetter = $alphabet[$letter];
            } else {
                $latinLetter = mb_strtoupper($alphabet[mb_strtolower($letter)]);
            }
        } else {
            $latinLetter = $letter;
        }
        $result .= $latinLetter;
    }
    return $result;
}

echo translate('Привет, пользователь');
echo '<b><br> Конец задания №4 </b>';

//Задание 5
echo '<b> Начало задания №4 <br></b>';

function spaceReplace ($string) {
    $result = '';
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $symbol = mb_substr($string, $i, 1);
        if ($symbol === ' ') {
            $symbol = '_';
        }
        $result .= $symbol;
    }
    return $result;
}
echo spaceReplace('Привет   Андрей') . '<br>';

//Через str_replace
$str = 'Проверяем замену. Check ';
echo str_replace(' ','_', $str);

echo '<b><br> Конец задания №4 </b>';

//Задание 7
echo '<b> Начало задания №7<br></b>';

    for ($i = 0; $i <10; print $i++);

echo '<b><br> Конец задания №7 </b>';