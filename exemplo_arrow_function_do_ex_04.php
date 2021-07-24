<?php
//Exemplo #4 Valores do escopo externo não podem ser modificados por arrow function

$x = 1;

$fn = fn() => $x++; // Não tem efeito

$fn();

var_export($x); // Imprime 1

//Nota: É possível usar func_num_args(), func_get_arg(), e func_get_args() de dentro de uma arrow functions.

?>