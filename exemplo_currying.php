<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Currying

//Após feito o currying, uma função recebe o primeiro parâmetro e devolve uma função que aceita o segundo e assim por diante.

function sum(int $x, int $y, int $z)
{
    return $x + $y + $z;
}

$total = sum(1, 2, 3);

echo $total; //6

echo "<br>";
//--------------------------
function sumCurrying(int $x)
{
    return function(int $y) use ($x)
    {
        return function(int $z) use ($x, $y)
        {
            return $x + $y + $z;
        };
    };
}

$total = sumCurrying(1)(5)(3);

echo $total;

?>