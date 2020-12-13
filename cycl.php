<?php

// Циклы
// for
// while
// foreach

for ( $i = 1; $i <= 10; $i++ )
{
    echo $i;

    if( $i % 2 == 0 )
    {
        echo ' - Чётное число';
    } else
    {
        echo ' - Не чётное число';
    }

    echo '<br/> <br/>';
}

echo  '<hr/>';

$test = 10;
while ( $test <= 20 )
{
    echo 'Тест '.$test.'<br/>';
    $test++;
}

echo  '<hr/>';

$names = array(
    'Jonn',
    'Amanda',
    'Flora',
    'Walker',
    'Alex'
);

foreach ( $names  as $value)
{
    echo $value .'<br/>';
}

echo  '<hr/>';

$numbers = array(5,10,25,50);

foreach ( $numbers as $num)
{
    echo 'Куб числа ' . $num . ': ' . ($num * $num) . '<br/>';
}


