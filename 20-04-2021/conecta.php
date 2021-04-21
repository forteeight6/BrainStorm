<?php

$sql = "mysql:dbname=economizeja;host=Localhost;";
$usuario = "root";
$senha = "";

try
{
    $mysql = new PDO($sql, $usuario, $senha);
    //print("conectado com sucesso!");
}
catch(PDOException $e)
{
    echo "FALHA: ".$e->getMessage();
}

?>