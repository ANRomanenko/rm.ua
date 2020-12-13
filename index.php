<?php

$a = 100; // целое число - integer, int
$b = 14.12; // дробь - float
$c = 'Test'; // string, str
$d = "Test"; // string, str
$e = array(
		'Jonny',
		'Andrey',
		'Flamingo'
); // массив - array

$f = array(
	'name' => 'Abraham',
	'surname' => 'Brahamich',
	'age' => 20,
	'byear' => 1987,
	'education' => array('school in 2005','college in 2010')
		,
	'married' => false,
	'smoking' => false,
	'programmer' => true
); // многомерный массив - array
$j = false; // булево значение или булев тип - boolean, bool

$names = 'Andron'; // канкатенация
$surmanes = 'Rm'; // канкатенация

echo "Число $a";
echo '<hr/>';
echo $b;
echo '<hr/>';
echo $c;
echo '<hr/>';
echo $d;
echo '<hr/>';
echo "Ваше имя $e[2]";
echo '<hr/>';
echo $f['education'][1];
echo '<hr/>';
echo $names . ' ' . $surmanes; // канкатенация
echo '<hr/>';
// + - * / %

echo 1084 % 4;


echo '<hr/>';
$s = 100;
$k = 18;
echo 'Ответ: ' . ($a + $k);



?>