<?php
//Crie uma matriz multidimensional tendo como chaves para filtrar os seus valores.

$lojas = ['Casas Bahia', 'Magazine Luiza'];

$caracteristicas = ['Nome do Produto', 'Marca do Produto', 'Quantidade/Peso', 'Valor'];


for($item=0; $item<sizeof($lojas); $item+=1)
{
    $matriz[$lojas[$item]] = $caracteristicas;
}

echo "<pre>";
print_r($matriz);
echo "</pre>";

?>