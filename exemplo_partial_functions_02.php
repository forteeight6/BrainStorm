<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Partial functions

//Podemos criar uma função generalista que retorna uma partial function de qualquer outra função, assim podemos reutiliza-las sempre que necessario.

function getPartialFunction($callback, ...$args)
{
    return function() use ($callback, $args)
    {
        return call_user_func_array($callback, array_merge($args, func_get_args()));
    };
}

function multiply(int $x, int $y): int
{
    return $x * $y;
}

function sum(int $a, int $b, int $c): int
{
    return $a + $b + $c;
}

$sumTenWith = getPartialFunction('sum', 10);
echo $sumTenWith(20, 30); //60

echo '<br>';

$sumTenAndTwentyWith = getPartialFunction('sum', 10, 20);
echo $sumTenAndTwentyWith(30); //60

function getNames(string $nameOne, string $nameTwo): string
{
    return "The names are: $nameOne and $nameTwo";
}

$printJhonAnd = getPartialFunction('getNames', "Jhon");

echo "<br>";
echo $printJhonAnd("Jane"); //"The names are: Jhon and Jane"

//Assim, possibilita criarmos funções generalista e ir criando as funções mais especificas quando necessário.

echo "<br>";

$multipliesByTwo = getPartialFunction('multiply', 2);
$multipliesByThree = getPartialFunction('multiply', 3);

echo $multipliesByTwo(5); // 10

echo "<br>";

echo $multipliesByThree(5); // 15

?>