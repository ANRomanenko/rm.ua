<?php

$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test_db');

if ( $connection == false )
{
    echo 'Не удалось подключиться к базе к данных';
    echo mysqli_connect_error();
    exit();
}

$start_date = '2017-12-12 14:00:00';
$start_date_time = strtotime($start_date);

$diff = time() - $start_date_time;
$days_passed = floor((($diff / 60) / 60) / 24);

echo 'Между ' . date('d.m.Y H:i:s', $start_date_time) . ' и ' .date('d.m.Y H:i:s') . ' 
   прошло ' . $days_passed. ' дня!';
echo '<hr/>';
?>

<form action="/arm.php" method="get">
    <input type="text" placeholder="Ваш логин" name="login">
    <input type="text" placeholder="Ваш пароль" name="password">
    <hr>
    <input type="submit" value="Отправить">
</form>
