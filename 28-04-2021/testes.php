<?php
//Crie uma matriz multidimensional tendo como chaves para filtrar os seus valores.

$lojas = ['Casas Bahia', 'Magazine Luiza'];

$caracteristicas = ['Nome do Produto', 'Marca do Produto', 'Quantidade/Peso', 'Valor'];

$produtos_da_casas_bahia = ['Smartphone', 'Tablet', 'Notebook'];
$marcas_do_smartphone_da_casas_bahia = ['Del', 'Nokia', 'Intel', 'MD'];
$marcas_do_tablet_da_casas_bahia = ['Mongi', 'Nokia', 'Domi', 'Gim'];
$marcas_do_notebook_da_casas_bahia = ['Del', 'Sansung', 'Positivo'];

$produtos_da_magazine_luiza = ['Computador', 'Camera'];
$marcas_do_computador_da_magazine_luiza = ['Sansung', 'Positivo'];
$marcas_do_camera_da_magazine_luiza = ['Sansung', 'Positivo', 'Opera'];

//------------------------------------------------------------------------------
//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_smartphones_da_casas_bahia_da_marca_del = ['1U', '2U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia = ['1U', '2U', '3U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_intel = ['1U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_md = ['1U', '2U', '3U', '4U'];

//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_tablets_da_casas_bahia_da_marca_mongi = ['3U', '5U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_nokia = ['2U', '3U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_domi = ['1U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_gim = ['1U', '3U', '4U'];

//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_notebooks_da_casas_bahia_da_marca_sansung = ['1U', '6U', '10U'];
$quantidades_de_notebooks_da_casas_bahia_da_marca_positivo = ['1U', '4U', '12U'];
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_computadores_da_magazine_luiza_da_marca_sansung = ['3U', '6U'];
$quantidades_de_computadores_da_magazine_luiza_da_marca_positivo = ['3U', '6U', '9U'];

//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_cameras_da_magazine_luiza_da_marca_sansung = ['1U', '6U', '10U'];
$quantidades_de_cameras_da_magazine_luiza_da_marca_positivo = ['1U', '4U', '12U'];
$quantidades_de_cameras_da_magazine_luiza_da_marca_opera = ['1U', '8U'];
//------------------------------------------------------------------------------

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
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_del[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_smartphone_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_smartphones_da_casas_bahia_da_marca_del[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_smartphones_da_casas_bahia_da_marca_del[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_nokia); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_smartphone_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_intel); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_intel[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_smartphone_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_smartphones_da_casas_bahia_da_marca_intel[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_smartphones_da_casas_bahia_da_marca_intel[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_smartphones_da_casas_bahia_da_marca_md); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]][$quantidades_de_smartphones_da_casas_bahia_da_marca_md[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_smartphone_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_smartphones_da_casas_bahia_da_marca_md[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[0]) && ($marcas_do_smartphone_da_casas_bahia[$item4] == $marcas_do_smartphone_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_smartphones_da_casas_bahia_da_marca_md[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_smartphone_da_casas_bahia[$item4]] = "valor";
                    }
                }
            }
            //TABLETS
            for($item4=0; $item4<sizeof($marcas_do_tablet_da_casas_bahia); $item4+=1)
            {
                for($item5=0; $item5<sizeof($quantidades_de_tablets_da_casas_bahia_da_marca_mongi); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]][$quantidades_de_tablets_da_casas_bahia_da_marca_mongi[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_tablet_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_tablets_da_casas_bahia_da_marca_mongi[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_tablets_da_casas_bahia_da_marca_mongi[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_tablets_da_casas_bahia_da_marca_nokia); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]][$quantidades_de_tablets_da_casas_bahia_da_marca_nokia[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_tablet_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_tablets_da_casas_bahia_da_marca_nokia[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_tablets_da_casas_bahia_da_marca_nokia[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_tablets_da_casas_bahia_da_marca_domi); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]][$quantidades_de_tablets_da_casas_bahia_da_marca_domi[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_tablet_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_tablets_da_casas_bahia_da_marca_domi[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_tablets_da_casas_bahia_da_marca_domi[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_tablets_da_casas_bahia_da_marca_gim); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]][$quantidades_de_tablets_da_casas_bahia_da_marca_gim[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_tablet_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_tablets_da_casas_bahia_da_marca_gim[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[1]) && ($marcas_do_tablet_da_casas_bahia[$item4] == $marcas_do_tablet_da_casas_bahia[3]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_tablets_da_casas_bahia_da_marca_gim[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_tablet_da_casas_bahia[$item4]] = "valor";
                    }
                }
            }
            //NOTEBOOKS
            for($item4=0; $item4<sizeof($marcas_do_notebook_da_casas_bahia); $item4+=1)
            {
                for($item5=0; $item5<sizeof($quantidades_de_notebooks_da_casas_bahia_da_marca_sansung); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_notebook_da_casas_bahia[$item4]][$quantidades_de_notebooks_da_casas_bahia_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_notebook_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_notebooks_da_casas_bahia_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_notebooks_da_casas_bahia_da_marca_sansung[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_notebook_da_casas_bahia[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_notebooks_da_casas_bahia_da_marca_positivo); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_casas_bahia[$item3]][$marcas_do_notebook_da_casas_bahia[$item4]][$quantidades_de_notebooks_da_casas_bahia_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_notebook_da_casas_bahia[$item4]][$produtos_da_casas_bahia[$item3]][$quantidades_de_notebooks_da_casas_bahia_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[0]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_casas_bahia[$item3] == $produtos_da_casas_bahia[2]) && ($marcas_do_notebook_da_casas_bahia[$item4] == $marcas_do_notebook_da_casas_bahia[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_notebooks_da_casas_bahia_da_marca_positivo[$item5]][$produtos_da_casas_bahia[$item3]][$marcas_do_notebook_da_casas_bahia[$item4]] = "valor";
                    }
                }
            }
        }
        //magazine_luiza
        for($item3=0; $item3<sizeof($produtos_da_magazine_luiza); $item3+=1)
        {
            for($item4=0; $item4<sizeof($marcas_do_computador_da_magazine_luiza); $item4+=1)
            {
                for($item5=0; $item5<sizeof($quantidades_de_computadores_da_magazine_luiza_da_marca_sansung); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_magazine_luiza[$item3]][$marcas_do_computador_da_magazine_luiza[$item4]][$quantidades_de_computadores_da_magazine_luiza_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_computador_da_magazine_luiza[$item4]][$produtos_da_magazine_luiza[$item3]][$quantidades_de_computadores_da_magazine_luiza_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_computadores_da_magazine_luiza_da_marca_sansung[$item5]][$produtos_da_magazine_luiza[$item3]][$marcas_do_computador_da_magazine_luiza[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_computadores_da_magazine_luiza_da_marca_positivo); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_magazine_luiza[$item3]][$marcas_do_computador_da_magazine_luiza[$item4]][$quantidades_de_computadores_da_magazine_luiza_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_computador_da_magazine_luiza[$item4]][$produtos_da_magazine_luiza[$item3]][$quantidades_de_computadores_da_magazine_luiza_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[0]) && ($marcas_do_computador_da_magazine_luiza[$item4] == $marcas_do_computador_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_computadores_da_magazine_luiza_da_marca_positivo[$item5]][$produtos_da_magazine_luiza[$item3]][$marcas_do_computador_da_magazine_luiza[$item4]] = "valor";
                    }
                }
            }
            //CAMERAS
            for($item4=0; $item4<sizeof($marcas_do_camera_da_magazine_luiza); $item4+=1)
            {
                for($item5=0; $item5<sizeof($quantidades_de_cameras_da_magazine_luiza_da_marca_sansung); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]][$quantidades_de_cameras_da_magazine_luiza_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_camera_da_magazine_luiza[$item4]][$produtos_da_magazine_luiza[$item3]][$quantidades_de_cameras_da_magazine_luiza_da_marca_sansung[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[0]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_cameras_da_magazine_luiza_da_marca_sansung[$item5]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_cameras_da_magazine_luiza_da_marca_positivo); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]][$quantidades_de_cameras_da_magazine_luiza_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_camera_da_magazine_luiza[$item4]][$produtos_da_magazine_luiza[$item3]][$quantidades_de_cameras_da_magazine_luiza_da_marca_positivo[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[1]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_cameras_da_magazine_luiza_da_marca_positivo[$item5]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]] = "valor";
                    }
                }
                for($item5=0; $item5<sizeof($quantidades_de_cameras_da_magazine_luiza_da_marca_opera); $item5+=1)
                {
                    if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[0]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]][$quantidades_de_cameras_da_magazine_luiza_da_marca_opera[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[1]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$marcas_do_camera_da_magazine_luiza[$item4]][$produtos_da_magazine_luiza[$item3]][$quantidades_de_cameras_da_magazine_luiza_da_marca_opera[$item5]] = "valor";
                    }
                    else if(($lojas[$item] == $lojas[1]) && ($caracteristicas[$item2] == $caracteristicas[2]) && ($produtos_da_magazine_luiza[$item3] == $produtos_da_magazine_luiza[1]) && ($marcas_do_camera_da_magazine_luiza[$item4] == $marcas_do_camera_da_magazine_luiza[2]))
                    {
                        $matriz[$lojas[$item]][$caracteristicas[$item2]][$quantidades_de_cameras_da_magazine_luiza_da_marca_opera[$item5]][$produtos_da_magazine_luiza[$item3]][$marcas_do_camera_da_magazine_luiza[$item4]] = "valor";
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