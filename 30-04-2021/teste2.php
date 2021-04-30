<?php
//Flag Tripla
//Dada a sequência de numero: 1, 2, 3, 4, 5, 6, 7, 8, 9
//Imprima: 1 4 7, 2 5 8, 3 6 9

$vetor = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
$flag = 0;

for($contador = 0; $contador<sizeof($vetor); $contador+=1)
{
    if($flag == 0)
    {
        $vetor_a[] = $vetor[$contador];
        $flag = 1;
    }
    else if($flag == 1)
    {
        $vetor_b[] = $vetor[$contador];
        $flag = 2;
    }
    else if($flag == 2)
    {
        $vetor_c[] = $vetor[$contador];
        $flag = 0;
    }
}

var_dump($vetor);
echo "<br>";
var_dump($vetor_a);
echo "<br>";
var_dump($vetor_b);
echo "<br>";
var_dump($vetor_c);

?>