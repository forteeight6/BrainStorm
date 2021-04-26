<?php
//https://www.php.net/manual/pt_BR/ref.array.php
//Crie uma tabela com uma array multidimencional - 
//Lembrando esse script sera reestruturado para orientado a objetos;
//Essas variaveis são apenas exemplares.

$caracteristicas = ['Nome do Produto', 'Marca do Produto', 'Quantidade/Peso', 'Valor'];

$lojas = ['Casas Bahia', 'Magazine Luiza'];

$produtos_da_casas_bahia = ['Smartphone', 'Tablet', 'Notebook'];
$produtos_da_magazine_luiza = ['Smartphone', 'Tablet', 'Notebook'];

$marcas_do_smartphone_da_casas_bahia = ['Del', 'Nokia', 'Intel', 'MD'];
$marcas_do_tablet_da_casas_bahia = ['Del', 'Nokia', 'Intel', 'MD'];
$marcas_do_notebook_da_casas_bahia = ['Del', 'Nokia', 'Intel', 'MD'];

$marcas_do_smartphone_da_magazine_luiza = ['Del', 'Nokia', 'Intel', 'MD'];
$marcas_do_tablet_da_magazine_luiza = ['Del', 'Nokia', 'Intel', 'MD'];
$marcas_do_notebook_da_magazine_luiza = ['Del', 'Nokia', 'Intel', 'MD'];

//Caso queira comprar em atacado ou peso se for comprar tipo 5kg de sabão em pó.
$quantidades_de_smartphones_da_casas_bahia_da_marca_del = ['1U', '2U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_nokia = ['1U', '2U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_intel = ['1U', '2U'];
$quantidades_de_smartphones_da_casas_bahia_da_marca_md = ['1U', '2U'];

$quantidades_de_tablets_da_casas_bahia_da_marca_del = ['1U', '2U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_nokia = ['1U', '2U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_intel = ['1U', '2U'];
$quantidades_de_tablets_da_casas_bahia_da_marca_md = ['1U', '2U'];

$quantidades_de_notebooks_da_casas_bahia_da_marca_del = ['1U', '2U'];
$quantidades_de_notebooks_da_casas_bahia_da_marca_nokia = ['1U', '2U'];
$quantidades_de_notebooks_da_casas_bahia_da_marca_intel = ['1U', '2U'];
$quantidades_de_notebooks_da_casas_bahia_da_marca_md = ['1U', '2U'];

//magazine luiza
$quantidades_de_smartphones_da_magazine_luiza_da_marca_del = ['1U', '2U'];
$quantidades_de_smartphones_da_magazine_luiza_da_marca_nokia = ['1U', '2U'];
$quantidades_de_smartphones_da_magazine_luiza_da_marca_intel = ['1U', '2U'];
$quantidades_de_smartphones_da_magazine_luiza_da_marca_md = ['1U', '2U'];

$quantidades_de_tablets_da_magazine_luiza_da_marca_del = ['1U', '2U'];
$quantidades_de_tablets_da_magazine_luiza_da_marca_nokia = ['1U', '2U'];
$quantidades_de_tablets_da_magazine_luiza_da_marca_intel = ['1U', '2U'];
$quantidades_de_tablets_da_magazine_luiza_da_marca_md = ['1U', '2U'];

$quantidades_de_notebooks_da_magazine_luiza_da_marca_del = ['1U', '2U'];
$quantidades_de_notebooks_da_magazine_luiza_da_marca_nokia = ['1U', '2U'];
$quantidades_de_notebooks_da_magazine_luiza_da_marca_intel = ['1U', '2U'];
$quantidades_de_notebooks_da_magazine_luiza_da_marca_md = ['1U', '2U'];


$precos_smartphone_Del_magazine_luiza = ['1','2'];
$precos_tablet_Del_magazine_luiza = ['1','2'];
$precos_notebook_Del_magazine_luiza = ['1','2'];

$precos_smartphone_Nokia_magazine_luiza = ['2','4'];
$precos_tablet_Nokia_magazine_luiza = ['2','4'];
$precos_notebook_Nokia_magazine_luiza = ['2','4'];

$precos_smartphone_Intel_magazine_luiza = ['3','5'];
$precos_tablet_Intel_magazine_luiza = ['3','5'];
$precos_notebook_Intel_magazine_luiza = ['3','5'];

$precos_smartphone_MD_magazine_luiza = ['6','6'];
$precos_tablet_MD_magazine_luiza = ['6','6'];
$precos_notebook_MD_magazine_luiza = ['6','6'];

//casas bahia
$precos_smartphone_Del_casas_bahia = ['1','2'];
$precos_tablet_Del_casas_bahia = ['1','2'];
$precos_notebook_Del_casas_bahia = ['1','2'];

$precos_smartphone_Nokia_casas_bahia = ['2','4'];
$precos_tablet_Nokia_casas_bahia = ['2','4'];
$precos_notebook_Nokia_casas_bahia = ['2','4'];

$precos_smartphone_Intel_casas_bahia = ['3','5'];
$precos_tablet_Intel_casas_bahia = ['3','5'];
$precos_notebook_Intel_casas_bahia = ['3','5'];

$precos_smartphone_MD_casas_bahia = ['6','6'];
$precos_tablet_MD_casas_bahia = ['6','6'];
$precos_notebook_MD_casas_bahia = ['6','6'];

for($linha=0;$linha<sizeof($lojas);$linha+=1)
{
    for($coluna=0;$coluna<sizeof($produtos);$coluna+=1)
    {
        for($linha2=0;$linha2<sizeof($marcas);$linha2+=1)
        {
            for($coluna2=0;$coluna2<sizeof($quantidades);$coluna2+=1)
            {
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
$contador_teste = 0;
$total_de_produtos = count($matriz5['Casas Bahia']);
$total_de_lojas = count($matriz5['Casas Bahia']['Smartphone']['Del']);
echo "<table style='width:50%;'>";
echo "<tr>";
echo "<th style='border: 1px solid black;' colspan=".$total_de_lojas.";>LOJAS</th>";
echo "</tr>";
echo "<tr style='border: 1px solid black;'>";
while(current($matriz5))
{
    if(key($matriz5) == 'Casas Bahia')
    {
        echo "<th style='border: 1px solid black;';></th>";
        echo "<th style='border: 1px solid black;'; colspan=".$total_de_produtos.">".key($matriz5)."</th>";
    }
    else
    {
        echo "<th style='border: 1px solid black;'; colspan=".$total_de_produtos.">".key($matriz5)."</th>";
    }
    
    next($matriz5);
}
echo "</tr>";
for($linha=0;$linha<sizeof($caracteristicas);$linha+=1)
{
    echo "<tr>";
    echo "<th  style='border: 1px solid black;'>".$caracteristicas[$linha]."</th>";
    if($linha == 0)
    {    
        for($repete=0; $repete<sizeof($matriz5); $repete+=1)
        {
            while(current($matriz5['Casas Bahia']))
            {
                echo "<td style='border: 1px solid black;';>".key($matriz5['Casas Bahia'])."</td>";

                next($matriz5['Casas Bahia']);
            }
            reset($matriz5['Casas Bahia']);
        }
    }
    else if($linha == 1)
    {
        for($repete=0; $repete<sizeof($matriz5); $repete+=1)
        {
            for($repete2=0; $repete2<sizeof($matriz5['Casas Bahia']); $repete2+=1)
            {
                while(current($matriz5['Casas Bahia']['Smartphone']))
                {
                    echo "<td style='border: 1px solid black;';>".key($matriz5['Casas Bahia']['Smartphone'])."</td>";

                    next($matriz5['Casas Bahia']['Smartphone']);
                }
                reset($matriz5['Casas Bahia']['Smartphone']);
            } 
        }
    }
    else if($linha == 2)
    {
        for($repete=0; $repete<sizeof($matriz5); $repete+=1)
        {
            for($repete2=0; $repete2<sizeof($matriz5['Casas Bahia']); $repete2+=1)
            {
                for($repete3=0; $repete3<sizeof($matriz5['Casas Bahia']['Smartphone']); $repete3+=1)
                {
                    while(current($matriz5['Casas Bahia']['Smartphone']['Del']))
                    {
                        echo "<td style='border: 1px solid black;';>".key($matriz5['Casas Bahia']['Smartphone']['Del'])."</td>";
                        
                        next($matriz5['Casas Bahia']['Smartphone']['Del']);
                    }
                    reset($matriz5['Casas Bahia']['Smartphone']['Del']);
                }
            } 
        }
    }
    else if($linha == 3)
    {
        //for($repete=0; $repete<sizeof($matriz5); $repete+=1)
        //{
            for($repete2=0; $repete2<sizeof($matriz5['Casas Bahia']); $repete2+=1)
            {
                for($repete3=0; $repete3<sizeof($matriz5['Casas Bahia']['Smartphone']); $repete3+=1)
                {
                    for($repete4=0; $repete4<sizeof($matriz5['Casas Bahia']['Smartphone']['Del']); $repete4+=1)
                    {                    
                        foreach($matriz5['Casas Bahia']['Smartphone']['Del'] as $preco)
                        {
                            echo "<td style='border: 1px solid black;';>".$preco."</td>";
                            $contador_teste+=1;
                        }
                    }
                }
            }
            for($repete2=0; $repete2<sizeof($matriz5['Magazine Luiza']); $repete2+=1)
            {
                for($repete3=0; $repete3<sizeof($matriz5['Magazine Luiza']['Smartphone']); $repete3+=1)
                {
                    for($repete4=0; $repete4<sizeof($matriz5['Magazine Luiza']['Smartphone']['Del']); $repete4+=1)
                    {                    
                        foreach($matriz5['Magazine Luiza']['Smartphone']['Del'] as $preco)
                        {
                            echo "<td style='border: 1px solid black;';>".$preco."</td>";
                            $contador_teste+=1;
                        }
                    }
                }
            } 
        //}
    }
    echo "<tr>";
}
echo "</table>";
echo $contador_teste;

/*
echo $lojas[0];
echo "<pre>";
print_r($matriz5['Casas Bahia']['Smartphone']['Del']['1U']);
echo "</pre>";

echo $lojas[1];
echo "<pre>";
print_r($matriz5['Magazine Luiza']['Smartphone']['Del']['1U']);
echo "</pre>";
*/
?>

<?php
/*
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport);    // $mode = 'foot';
$mode = end($transport);     // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
*/
?>