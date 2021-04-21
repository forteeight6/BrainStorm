<?php
    //CRIE UM OBJETO QUE TRABALHE COM MANIPULAÇÃO DE TABELAS
    //CRIE UM MÉTODO QUE CRIE UMA TABELA - OK
    //CRIE UM MÉTODO QUE DEFINA O TAMANHO DA TABELA - 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS COLUNAS - 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS LINHAS - 
    
    class Tabela
    {
        function cria_tabela()
        {
            echo "<table style='width:100%'>";
            echo "<tr>";
            echo "<th>Firstname</th>";
            echo "<th>Lastname</th>";
            echo "<th>Age</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Jill</td>";
            echo "<td>Smith</td>";
            echo "<td>50</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Eve</td>";
            echo "<td>Jackson</td>";
            echo "<td>94</td>";
            echo "</tr>";
            echo "</table>";
        }
    }

    $variavel = new Tabela();

    $variavel->cria_tabela();
?>