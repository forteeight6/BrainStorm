<?php

$sql = "mysql:dbname=memorize;host=localhost";
$user = "root";
$password = "";

try
{
    $dados = new PDO(
        $sql, $user, $password
    );
}
catch(PDOException $e)
{
    echo "FALHOU: ".$e->getMessage();
}

?>