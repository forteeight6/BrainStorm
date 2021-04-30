<?php
    require 'teste.php';
    echo count($produtos_da_casas_bahia);
?>

<?php

$flag = 0;
$flag2 = 0;

echo "<table>";

//----------------MATRIZ----------------------------------
echo "<tr>";
if($flag2 == 0)
{
    echo "<th style='border:solid;'></th>";
    $flag2 = 1;
}
while(current($matriz))
{
    if($flag2 == 1)
    {
        echo "<th style='border:solid;' colspan=".count($produtos_da_casas_bahia).">".key($matriz)."</th>";
        $flag2 = 2;
    }
    else if($flag2 == 2)
    {
        echo "<th style='border:solid;' colspan=".count($produtos_da_magazine_luiza).">".key($matriz)."</th>";
        $flag2 = 3;
    }

    next($matriz);
}
echo "</tr>";

//----------------------------------------------------------

while(current($matriz['Casas Bahia']) or current($matriz['Magazine Luiza'])) {
    echo "<tr>";    
        echo "<th style='border:solid;'>".key($matriz['Casas Bahia'])."</th>";
        if($flag == 0)
        {        
            while(current($matriz['Casas Bahia']['Nome do Produto']))
            {
                echo "<th style='border:solid;'>".key($matriz['Casas Bahia']['Nome do Produto'])."</th>";

                next($matriz['Casas Bahia']['Nome do Produto']);
            }
            while(current($matriz['Magazine Luiza']['Nome do Produto']))
            {
                echo "<th style='border:solid;'>".key($matriz['Magazine Luiza']['Nome do Produto'])."</th>";

                next($matriz['Magazine Luiza']['Nome do Produto']);
            }
            $flag = 1;
        }
        else if($flag == 1)
        {        
            while(current($matriz['Casas Bahia']['Marca do Produto']))
            {
                echo "<th style='border:solid;'>".key($matriz['Casas Bahia']['Marca do Produto'])."</th>";

                next($matriz['Casas Bahia']['Marca do Produto']);
            }
            while(current($matriz['Magazine Luiza']['Marca do Produto']))
            {
                echo "<th style='border:solid;'>".key($matriz['Magazine Luiza']['Marca do Produto'])."</th>";

                next($matriz['Magazine Luiza']['Marca do Produto']);
            }
            $flag = 2;
        }
        else if($flag == 2)
        {        
            while(current($matriz['Casas Bahia']['Quantidade/Peso']))
            {
                echo "<th style='border:solid;'>".key($matriz['Casas Bahia']['Quantidade/Peso'])."</th>";

                next($matriz['Casas Bahia']['Quantidade/Peso']);
            }
            while(current($matriz['Magazine Luiza']['Quantidade/Peso']))
            {
                echo "<th style='border:solid;'>".key($matriz['Magazine Luiza']['Quantidade/Peso'])."</th>";

                next($matriz['Magazine Luiza']['Quantidade/Peso']);
            }
            $flag = 3;
        }
    
    next($matriz['Casas Bahia']);
    next($matriz['Magazine Luiza']);
}
echo "</tr>";
//----------------------------------------------------------

echo "</table>";

?>
