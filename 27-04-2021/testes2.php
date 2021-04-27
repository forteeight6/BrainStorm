<?php
//Crie uma matriz multidimensional tendo como chaves para filtrar os seus valores.

$lojas = ['Casas Bahia', 'Magazine Luiza'];

$caracteristicas = ['Nome do Produto', 'Marca do Produto', 'Quantidade/Peso', 'Valor'];

$produtos_da_casas_bahia = ['Smartphone', 'Tablet', 'Notebook'];

for($item=0; $item<sizeof($lojas); $item+=1)
{
    for($item2=0; $item2<sizeof($caracteristicas); $item2+=1)
    {
        $matriz[$lojas[$item]][$caracteristicas[$item2]] = $item2;
    }
}

echo "<pre>";
print_r($matriz);
echo "</pre>";

?>