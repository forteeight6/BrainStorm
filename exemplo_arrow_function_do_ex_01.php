<?php
//So vai funcionar a partir do PHP 7.4
// Exemplo #1 Arrow Functions capturam variaveis por valor automaticamente

$y = 1;

$fn1 = fn($x) => $x + $y;

// Equivalente ao usar $y por valor:

$fn2 = function ($x) use ($y)
{
    return $x + $y;
};

var_export($fn1(3));

?>