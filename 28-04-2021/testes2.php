<?php
    require 'testes.php';

    echo "<pre>";
    echo sizeof($matriz['Casas Bahia']['Nome do Produto']['Smartphone'])."<br>";
    print_r($matriz['Casas Bahia']['Nome do Produto']['Smartphone']);
    echo "</pre>";
?>

<?php
//Crie uma tabela usando os dados da matriz multidimensional.

echo "<table style='width:100%; border-style:solid'>";

echo "<tr>";
while(current($matriz))
{   
    if(key($matriz) == $lojas[0])
    {
        echo "<th style='border: 1px solid black;'></th>";
        echo "<th style='border: 1px solid black;' colspan=".sizeof($matriz['Casas Bahia']['Nome do Produto']).">".key($matriz)."</th>";
    }
    else
    {
        echo "<th style='border: 1px solid black;' colspan=".sizeof($matriz['Magazine Luiza']['Nome do Produto']).">".key($matriz)."</th>";
    }
    next($matriz);
}
echo "</tr>";
while(current($matriz['Casas Bahia']))
{
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>".key($matriz['Casas Bahia'])."</td>";
    while(current($matriz['Casas Bahia']['Nome do Produto']))
    {
            echo "<td style='border: 1px solid black;'>".key($matriz['Casas Bahia']['Nome do Produto'])."</td>";
        next($matriz['Casas Bahia']['Nome do Produto']);
    }
    while(current($matriz['Magazine Luiza']['Nome do Produto']))
    {
        echo "<td style='border: 1px solid black;'>".key($matriz['Magazine Luiza']['Nome do Produto'])."</td>";
        next($matriz['Magazine Luiza']['Nome do Produto']);
    }
    echo "</tr>";
 
    echo "<tr>";
    while(current($matriz['Casas Bahia']['Marca do Produto']))
    {
        echo "<td style='border: 1px solid black;'>".key($matriz['Casas Bahia']['Marca do Produto'])."</td>";
        next($matriz['Casas Bahia']['Marca do Produto']);
    }
    while(current($matriz['Magazine Luiza']['Marca do Produto']))
    {
        echo "<td style='border: 1px solid black;'>".key($matriz['Magazine Luiza']['Marca do Produto'])."</td>";
        next($matriz['Magazine Luiza']['Marca do Produto']);
    }
    echo "</tr>";

    next($matriz['Casas Bahia']);
}

echo "</table>";

?>