<?php
// Exemplos #3 Exemplos de arrow functions
//fonte: https://www.php.net/manual/pt_BR/functions.arrow.php

fn(array $x) => $x;

static fn(): int => $x;

fn($x = 42) => $x;

fn(&$x) => $x;

fn&($x) => $x;

fn($x, ...$rest) => $rest;

//Arrow functions usam vinculação de variável por valor. Isso é aproximadamente equivalente a realizar um use($x) para cada variável $x usada dentro da arrow function. Uma passagem de variável por valor, significa que não é possível modificar quaisquer valores do escopo externo. Funções anônimas podem ser usadas em vez disso para passagem de variável por referência.

?>