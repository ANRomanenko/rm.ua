<?php

$weather = 'ясно'; //  снег, дождь, ясно, облачно

if( $weather == 'снег' ) {
    echo 'Погода полохая лучше никуда не ехать!' ;
}

if( $weather == 'дождь' ) {
    echo 'Бери зонт и одевай обувь что бы не промокли ноги!' ;
}

if( $weather == 'ясно' ) {
    echo 'Надень солнечные очки и кепку!' ;
}

if( $weather == 'облачно' ) {
    echo 'Возьми зонт на всяуий случай!' ;
}

echo '<hr/>';

$age = 24;

// Пропуск в клуб с 24 лет
if ( $age < 24 )
{
    echo 'Вы ещё слишком малы для клуба' ;
}

if ( $age >= 24 )
{
    echo 'Добро пожаловать в клуб!' ;
}


// <, >, <=, >=, ==, != (операторы сравнения)
// or, and (логические операторы)


echo '<hr/>';

$key = 100500;

if ( $key != 100500 )
{
    echo 'Обычная цифра';
} else {
    echo 'Если равно то всё верно!';
}

echo '<hr/>';

$name = 'Abraham';
$ages = '15';

if ( $ages < 20 and $name != 'Abraham' )
{
    echo 'Вход запрещён! Ты слишком маленький!';
} else
{
    echo 'Войдите';
}

echo '<hr/>';

$rating = 26;

if ( $rating >= 25 and $rating <= 74 )
{
    echo 'Ты преуспевающий человек';
} else
{
    echo 'Или не точно!';
}










