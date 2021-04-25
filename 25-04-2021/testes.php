<?php
//Crie uma matriz usando varios vetores:
//Para cada mercado recebe X produtos;
//Para cada produto recebe X marcas;
//Para cada marca recebe X quantidades;
//Para cada quantidade recebe X preços;

$mercados = ['Porecatu', 'Proenca'];
$produtos = ['Arroz', 'Feijao'];
$marcas = ['A', 'B', 'C', 'D'];
$quantidades = ['1KG', '2KG', '4KG', '5KG'];
$precos = ['1','2','3','4'];


for($mercado=0;$mercado<sizeof($mercados);$mercado+=1)
{
    $matriz[$mercados[$mercado]] = $produtos;
}


for($produto=0;$produto<sizeof($produtos);$produto+=1)
{
    $matriz2[$produtos[$produto]] = $marcas;
}


for($marca=0;$marca<sizeof($marcas);$marca+=1)
{
    $matriz3[$marcas[$marca]] = $quantidades;
}

for($quantidade=0;$quantidade<sizeof($quantidades);$quantidade+=1)
{
    $matriz4[$quantidades[$quantidade]] = $precos[$quantidade];
}

//var_dump($matriz);
//var_dump($matriz2);
//var_dump($matriz3);
//var_dump($matriz4);



?>