<?php
//Crie uma matriz usando varios vetores:
//Para cada loja recebe X produtos; - ok
//Para cada produto recebe X marcas; - ok
//Para cada marca recebe X quantidades; - ok
//Para cada quantidade recebe X preços; - ok
//Crie uma tabela com esses dados; - 
//Crie um método que crie essa tabela facilmente; - 
//Use o extends para o objeto Tabela não ficar muito extenso; -

$lojas = ['Casas Bahia', 'Magazine Luiza'];
$produtos = ['Smartphone', 'Tablet', 'Notebook'];
$marcas = ['Del', 'Nokia', 'Intel', 'MD'];
$quantidades = ['1U', '2U', '4U', '5U', '10U'];

$precos_Del_magazine_luiza = ['1','2','3','4','5'];
$precos_Nokia_magazine_luiza = ['2','4','6','8','10'];
$precos_Intel_magazine_luiza = ['3','5','7','9','11'];
$precos_MD_magazine_luiza = ['6','6','8','10','12'];

$precos_Del_casas_bahia = ['1','4','6','4','10'];
$precos_Nokia_casas_bahia = ['4','4','6','8','10'];
$precos_Intel_casas_bahia = ['6','10','7','9','11'];
$precos_MD_casas_bahia = ['6','6','8','10','14'];

/*
for($loja=0;$loja<sizeof($lojas);$loja+=1)
{
    $matriz[$lojas[$loja]] = $produtos;
    $x[$loja] = $produtos;
    echo sizeof($x);
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
*/
//var_dump($matriz);
//var_dump($x);
//var_dump($matriz2);
//var_dump($matriz3);
//var_dump($matriz4);

for($linha=0;$linha<sizeof($lojas);$linha+=1)
{
    //echo $lojas[1];
    for($coluna=0;$coluna<sizeof($produtos);$coluna+=1)
    {
        //echo $linha;
        //echo $coluna;
        
        //$matriz5[$lojas[$linha]][$produtos[$coluna]] = $marcas;

        for($linha2=0;$linha2<sizeof($marcas);$linha2+=1)
        {
            //echo $marcas[$linha2]."<br>";
            //echo $linha;
            //echo $coluna;
            //echo $linha2;
            //echo "<br>";

            //$matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]] = $quantidades;
            for($coluna2=0;$coluna2<sizeof($quantidades);$coluna2+=1)
            {
                //$matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos[$coluna2];
                //echo $coluna2."<br>";

                //Verificar a Key e atribuir valor.

                if($lojas[$linha] == "Casas Bahia")
                {   
                    if($marcas[$linha2] == "Del")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Del_casas_bahia[$coluna2];
                    }
                    else if($marcas[$linha2] == "Nokia")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Nokia_casas_bahia[$coluna2];
                    }
                    else if($marcas[$linha2] == "Intel")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Intel_casas_bahia[$coluna2];
                    }
                    else if($marcas[$linha2] == "MD")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_MD_casas_bahia[$coluna2];
                    }
                }
                else if($lojas[$linha] == "Magazine Luiza")
                {
                    if($marcas[$linha2] == "Del")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Del_magazine_luiza[$coluna2];
                    }
                    else if($marcas[$linha2] == "Nokia")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Nokia_magazine_luiza[$coluna2];
                    }
                    else if($marcas[$linha2] == "Intel")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_Intel_magazine_luiza[$coluna2];
                    }
                    else if($marcas[$linha2] == "MD")
                    {
                        $matriz5[$lojas[$linha]][$produtos[$coluna]][$marcas[$linha2]][$quantidades[$coluna2]] = $precos_MD_magazine_luiza[$coluna2];
                    }
                }

            }            
        }

    }
}

//CASO ESTIVER OCULTANDO O CÓDIGO FONTE, NÃO USAR O VAR_DUMP, USAR O <PRE> COM O PRINT_R.
echo $lojas[0];
echo "<pre>";
print_r($matriz5['Casas Bahia']['Smartphone']['Del']);
echo "</pre>";

echo $lojas[1];
echo "<pre>";
print_r($matriz5['Magazine Luiza']['Smartphone']['Del']);
echo "</pre>";

?>