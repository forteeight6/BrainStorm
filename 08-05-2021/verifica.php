<?php

require 'config.php';

$x = null;

$comando = "SELECT * FROM cronogramas WHERE data_do_cronograma='08052021';";

$dados = $sql->query($comando);

foreach($dados as $dado)
{
    $x = $dado['data_do_cronograma'];
}

if($x == null)
{
    echo 'entrou';
}
else
{
    echo $x;
}


?>