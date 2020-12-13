<?php

function get_bigger( $a, $b )
{
    if ( $a > $b )
    {
        return $a;
    } else
    {
        return $b;
    }

}

$bigger = get_bigger( 10, 20 );

echo $bigger;
echo '<hr/>';
// математические функции
// abs, round, ceil, floor, rand, min, max

echo abs(-3000);
echo '<hr/>';
echo round(50.59);
echo '<hr/>';
echo ceil(50.11);
echo '<hr/>';
echo floor(50.99);
echo '<hr/>';
echo rand(0, 2178);
echo '<hr/>';
echo min(5,2,3,10);
echo '<hr/>';
echo max(5, 10, 30);

