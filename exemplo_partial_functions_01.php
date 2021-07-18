<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Partial functions

function makeMultiply(int $x):Closure
{
    return function(int $num) use ($x):int
    {
        return $num * $x;
    };
}

$multipliesByTwo = makeMultiply(2);
$multipliesByThree = makeMultiply(3);

echo $multipliesByTwo(5); //10
echo "<br>";
echo $multipliesByThree(5); //15

//Nesse exemplo construimos um __CONSTRUTOR no Paradigma Funcional.

?>