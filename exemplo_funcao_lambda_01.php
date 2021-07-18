<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

$sum = function(int $x, int $y): int
{
    return $x + $y;
};

echo $sum(5, 2);
echo "<br>";

function soma($sum, $x, $y)
{
    return $sum($x, $y);
}

echo soma($sum, 8, 10);
?>