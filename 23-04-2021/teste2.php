<!--Criar Tabela invertida-->
<?php
    $vetor = ['PRODUTO','MARCA','QUANTIDADE','PRECO'];
    $matriz = [['arroz','solito','1kg', 5.35],['feijao','solito','1kg', 4.20],['macarrao','solito','1kg', 3.50],['sal','solito','1kg', 5.60],['oleo','solito','1kg', 3.45]];

    echo "<table>";

    for($x=0; $x<sizeof($matriz); $x+=1)
    {
        $colunas[] = sizeof($matriz[$x]);
    }
    
    $coluna=0;
    for($x=0;$x<sizeof($vetor);$x+=1)
    {
        echo "<tr>";
        echo "<th>".$vetor[$x]."</th>";
        
        for($linha=0;$linha<sizeof($matriz);$linha+=1)
        {
            echo "<td>".$matriz[$linha][$coluna]."</td>";
        }
        echo "</tr>";
        $coluna+=1;
    }
    echo "</table>";
?>