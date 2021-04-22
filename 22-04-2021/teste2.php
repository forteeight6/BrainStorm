<?php

$estados = array("SP","PB","RS");

echo sizeof($estados);

?>

<?php

$estados = [["SP","PB","RS"], ["SP","PB","RS"]];

echo sizeof($estados);
echo "<br>";
echo sizeof($estados[0]);

?>

<?php
//Crie um array com a contagem de cada linha de uma matriz;

$estados = [["SP","PB","RS","MS"], ["SP","PB","RS"], ["SP","PB","RS","AM","MT"], ["SP","PB","RS"]];

for($x=0; $x<sizeof($estados); $x+=1)
{
    $array[] = sizeof($estados[$x]);
}

var_dump($array);

?>