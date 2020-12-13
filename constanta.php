<?php
// Предположим, определена константа PI, равная 3.14116...
$a = 2.34 * sin(3 * PI / 8) + 6; // использование константы
echo "Это число PI";                  // выведет "Это число PI"
echo "<br/>";
echo PI;                            // выведет "Это число 3.1416..."

echo "<br/>";
echo "<br/>";

define("pi", 3.14);
define("str", "Test string");
echo sin(pi /4);
echo "<br/>";
echo str;

?>