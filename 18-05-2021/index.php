<?php
    require 'obj_createdb.php';
?>

<?php

$object = new createdb;

$object->config("root", "");
$object->newDatabase("FromAmerica");
$object->conectarDatabase("FromAmerica");

//Criar Método que Cria Tabela, com seus campos e determinados valores.
$matriz = ["CADASTROS" => ["USUARIO" => ["NOME" => ["JOAO" => ["JOAO@GMAIL.COM" => [null]], "MARIA" => ["MARIA@GMAIL.COM" => [null]], "PEDRO" => ["PEDRO@GMAIL.COM" => [null]]], "EMAIL" => ["JOAO@GMAIL.COM" => ["JOAO" => [null]], "MARIA@GMAIL.COM" => ["MARIA" => [null]], "PEDRO@GMAIL.COM" => ["PEDRO" => [null]]], "SENHA" => [123 => ["JOAO" => [null]], 321 => ["MARIA" => [null]], 231 =>["PEDRO" => [null]]]], "ADMINISTRADOR" => ["NOME" => ["PAULO" => ["PAULO@GMAIL.COM" => [null]]], "EMAIL" => ["PAULO@GMAIL.COM" => ["PAULO" => [null]]], "SENHA" => [457 => ["PAULO" => [null]]]]], "CURSOS" => ["USUARIO" => ["NOME" => ["JOAO" => ["JOAO@GMAIL.COM" => [null]], "MARIA" => ["MARIA@GMAIL.COM" => [null]], "PEDRO" => ["PEDRO@GMAIL.COM" => [null]]], "EMAIL" => ["JOAO@GMAIL.COM" => ["JOAO" => [null]], "MARIA@GMAIL.COM" => ["MARIA" => [null]], "PEDRO@GMAIL.COM" => ["PEDRO" => [null]]], "SENHA" => [123 => ["JOAO" => [null]], 321 => ["MARIA" => [null]], 231 =>["PEDRO" => [null]]]], "ADMINISTRADOR" => ["NOME" => ["PAULO" => ["PAULO@GMAIL.COM" => [null]]], "EMAIL" => ["PAULO@GMAIL.COM" => ["PAULO" => [null]]], "SENHA" => [457 => ["PAULO" => [null]]]]]];

echo "<pre>";
print_r($matriz);
echo "<pre>";

$object->createTable($matriz);

?>