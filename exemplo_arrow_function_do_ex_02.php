<?php
//Exemplo #2 Arrow functions capturam variáveis por valor automaticamente, mesmo quando aninhadas

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;

//Outputs 51

var_export($fn(5)(10));

//Da mesma forma que funções anônimas, a sintaxe das arrow functions permitem assinaturas de função arbitrária, incluindo parâmetros e tipos de retorno, valores padrão, variadics, bem como por referência passando e retornando. Todos os exemplos válidos de arrow functions:

?>