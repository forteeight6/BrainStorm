<?php
//Crie uma matriz multidimensional tendo como chaves para filtrar os seus valores.

$lojas = ['Casas Bahia', 'Magazine Luiza'];

$caracteristicas = ['Nome do Produto', 'Marca do Produto', 'Quantidade/Peso', 'Valor'];

$produtos_da_casas_bahia = ['Smartphone', 'Tablet', 'Notebook'];
$marcas_do_smartphone_da_casas_bahia = ['Del', 'Nokia', 'Intel', 'MD'];

//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_smartphones_da_casas_bahia_da_marca_del = ['1U', '2U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia = ['1U', '2U', '3U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_intel = ['1U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_md = ['1U', '2U', '3U', '4U'];

for($item=0; $item<sizeof($lojas); $item+=1)
{
    for($item2=0; $item2<sizeof($caracteristicas); $item2+=1)
    {
        for($item3=0; $item3<sizeof($produtos_da_casas_bahia); $item3+=1)
        {
            for($item4=0; $item4<sizeof($marcas_do_smartphone_da_casas_bahia); $item4+=1)
            {
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_del); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_del[$item5]] = $quantidades_de_smartphones_da_casas_bahia_da_marca_del[$item5];
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_nokia); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia[$item5]] = $quantidades_de_smartphones_da_casas_bahia_da_marca_nokia[$item5];
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_intel); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_intel[$item5]] = $quantidades_de_smartphones_da_casas_bahia_da_marca_intel[$item5];
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_md); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_md[$item5]] = $quantidades_de_smartphones_da_casas_bahia_da_marca_md[$item5];
                    }
                }
            }
        }
    }
}

echo "<pre>";
print_r($matriz);
echo "</pre>";
?>