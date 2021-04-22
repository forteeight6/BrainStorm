<?php
//Crie um vetor para a linha principal;
//Crie uma matriz para as linhas secundarias;
//Deve ficar da seguinte forma:
//vetor: 
//LINHA0 - PRODUTO, MARCA, QUANTIDADE, QUANTIDADE, PREÇO;
//MATRIZ:
//LINHA1 - PRODUTO(L0-C0), MARCA(L0-C1), QUANTIDADE(L0-C2), PREÇO(L0-C3);
//LINHA2 - PRODUTO(L1-C0), MARCA(L1-C1), QUANTIDADE(L1-C2), PREÇO(L1-C3);
//LINHA3 - PRODUTO(L2-C0), MARCA(L2-C1), QUANTIDADE(L2-C2), PREÇO(L2-C3);
//LINHA4 - PRODUTO(L3-C0), MARCA(L3-C1), QUANTIDADE(L3-C2), PREÇO(L3-C3);
$vetor = ['PRODUTO', 'MARCA', 'QUANTIDADE', 'PRECO'];

$matriz = [['arroz','solito','1kg', 5.35],['feijao','solito','1kg', 4.20],['macarrao','solito','1kg', 3.50],['sal','solito','1kg', 5.60],['oleo','solito','1kg', 3.45]];

//var_dump($vetor);
//echo "<br>";
//var_dump($matriz);
$count = count($vetor);
$count2 = count($matriz);
$count3 = count($matriz[0]);
//echo $count3;

/*echo "<table style='width:100%'><tr>";
for($x=0; $x<$count; $x+=1)
{
    echo "<th>".$vetor[$x]."</th>";
}
echo "</tr>";
echo "<tr>";
for($x=0; $x<$count; $x+=1)
{
    echo "<td>".$vetor[$x]."</td>";
}
echo "</tr>";
echo "</table>";
*/

echo "<table style='width:100%'><tr>";
for($x=0; $x<$count; $x+=1)
{
    echo "<th>".$vetor[$x]."</th>";
}
echo "</tr>";

for($linha=0; $linha<$count2; $linha+=1)
{
    echo "<tr>";
    for($coluna=0; $coluna<$count3; $coluna+=1)
    {
        echo "<td>".$matriz[$linha][$coluna]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>