<?php
$a = 5;
$b = '05';

// "==" - делает сравнение по значению, а не по типу.
// значение каждой переменоой будет равно 5.
var_dump($a == $b);         // Почему true?

//Происходит явное приведение строки в целое число.
//Так как нет целых чиел начинающихся на 0, мы видем это.
var_dump((int)'012345');     // Почему 12345?

// "===" - делает сравнение как по значению, так и по типу.
// Явное приведение типов в этом примере говорит о том, что числа будут разных типов.
// Именно поэтому мы видим flase
var_dump((float)123.0 === (int)123.0); // Почему false?

//Явное приведение типа строки не содержащей чисел к числу, ведет к приравниванию этой строки к нулю.
//Именно пожтому мы видим true
var_dump((int)0 === (int)'hello, world'); // Почему true?
#Конец задания №3