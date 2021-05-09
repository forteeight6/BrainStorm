<?php

require 'config.php';

$array = ['08052021', '09052021', '10052021', '11052021'];

for($cont=0; $cont<count($array); $cont+=1)
{
    $x[$cont] = null;
    $comando[] = "SELECT * FROM cronogramas WHERE data_do_cronograma=".$array[$cont].";";
    $dados[] = $sql->query($comando[$cont]);

    foreach($dados[$cont] as $dado[$cont])
    {
        $x[$cont] = $dado[$cont]['data_do_cronograma'];
    }
    
    if($x[$cont] == null)
    {
        echo 'entrou<br>';
    }
    else
    {
        echo $x[$cont]."<br>";
    }
}

?>