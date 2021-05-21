<?php
    require "config.php";
    require "itens.php";
?>

<?php
//Ater
//Criar script para memorizar os produtos vendidos na Coco Bambu;

echo "<title>Memorize</title>";

echo "<form method='GET' action='redirecionamento.php'>";

$vetor = ['SOBREMESA', 'SALADAS', 'TORTAS INTEIRAS', 'PASTEIS', 'PIZZAS', 'MOQUECAS', 'LAGOSTAS', 'KIDS', 'HAMBURGUER', 'FRUTOS DO MAR', 'FRANGO', 'ESCONDIDINHOS', 'ENTRADAS', 'DIETAS ESPECIAIS', 'CARNES', 'CAMARÕES', 'PEIXES'];
$objeto = new Itens;
$objeto->newItens($vetor);

echo "<button type='submit'>Enviar</button>";
echo "</form>";
?>