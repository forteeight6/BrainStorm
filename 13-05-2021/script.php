<?php
//Crie um script que conte quantos bancos de dados possui no sistema;
require 'config.php';

$comando = "SHOW DATABASES;";

$dados = $sql->query($comando);

foreach($dados as $dado)
{
    $array[] = $dado;
}

echo "<pre>";
print_r(count($array));
echo "</pre>";
?>