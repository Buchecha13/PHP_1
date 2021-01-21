<?php

//Задание 1
echo '<b>Начало задания №1</b> <br>';
$a = rand(-5, 5);
$b = rand(-5, 5);
if ($a >= 0 && $b >= 0) {
    echo 'Разность a и b';
} elseif ($a < 0 && $b < 0) {
    echo 'Произведение a и b';
} else {
    echo 'сумма a и b';
}
echo '<br> <b>Конец задания №1</b> <br>';
echo '<br> <b>Начало задания №2</b> <br>';

// Задание 2
$a = rand(0, 15);
echo "Случайное число = {$a} <br>";

echo '<br> <i>Решение через оператор switch</i> <br>';
switch ($a) {
    case 0:
        echo 0 . ' ';
    case 1:
        echo 1 . ' ';
    case 2:
        echo 2 . ' ';
    case 3:
        echo 3 . ' ';
    case 4:
        echo 4 . ' ';
    case 5:
        echo 5 . ' ';
    case 6:
        echo 6 . ' ';
    case 7:
        echo 7 . ' ';
    case 8:
        echo 8 . ' ';
    case 9:
        echo 9 . ' ';
    case 10:
        echo 10 . ' ';
    case 11:
        echo 11 . ' ';
    case 12:
        echo 12 . ' ';
    case 13:
        echo 13 . ' ';
    case 14:
        echo 14 . ' ';
    case 15:
        echo 15 . ' ';
        break;
    default:
        echo 'Сюда не попасть';
}

echo '<br> <i>Решение через рекурсию</i> <br>';
echo randSwitch($a);

function randSwitch($a): string
{
    if ($a <= 15) {
        echo $a++ . ' ';
        randSwitch($a);
    }
    return 'Функция отработала правильно';
}

echo '<br> <b>Конец задания №2</b> <br>';
//Задание 3
echo '<br> <b>Начало задания №3</b> <br>';

function addition($a, $b)
{
    return $a + $b;
}
echo "Сложение 6 и 3 = " . addition(6, 3) . '<br>';

function subtraction($a, $b)
{
    return $a - $b;
}
echo "Вычитание 6 и 3 = " . subtraction(6, 3) . '<br>';

function multiplication($a, $b)
{
    return $a * $b;
}
echo "Умножение 6 и 3 = " . multiplication(6, 3) . '<br>';

function division($a, $b)
{
//  Не уверен, что правильно здесь поставил return. Как то громоздко выглядит выражение..
    return ($b === 0) ? $err = 'На ноль делить не стоит' : $a / $b;

}
echo "Деление 6 и 3 = " . division(6, 3) . '<br>';
echo "Деление 6 и 0 = " . division(6, 0) . '<br>';

echo '<br> <b>Конец задания №3</b> <br>';
