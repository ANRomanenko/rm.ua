<?php ## Ссылки на объкты
    // Объявляем новый класс
    class AgentSmith {}
    // Создаём новый объект класса AgentSmith
    $first = new AgentSmith();
    // Присваиваем занчение атрибуту класса
    $first -> mind = 0.123;
    // Копируем объекты
    $second = $first;
    // Изменяем "разумность" у копии!
    $second -> mind = 100;
    // Выводим оба значения
    echo "First mind: {$first -> mind}, second: {$second -> mind}";


    // Предположим, определена константа PI, равная 3.14116...
    $a = 2.34 * sin(3 * PI / 8 ) + 5;
    echo "Это число PI";
    echo "<br/>";
    echo "Это число " .PI ;
    echo "<hr/>";
    echo false;
?>