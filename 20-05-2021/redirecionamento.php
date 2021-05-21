<?php

require "variaveis.php";

?>

<?php
//Se o item estiver na array conta lo senão não conta-lo;
    //var_dump($_GET);
    /*foreach($_GET as $dado)
    {
        echo $dado;
    }*/
    /*if(key($_GET) == 'SOBREMESA')
    {
        
    }*/
    $vetor = ['SOBREMESA', 'SALADAS', 'TORTAS INTEIRAS', 'PASTEIS', 'PIZZAS', 'MOQUECAS', 'LAGOSTAS', 'KIDS', 'HAMBURGUER', 'FRUTOS DO MAR', 'FRANGO', 'ESCONDIDINHOS', 'ENTRADAS', 'DIETAS ESPECIAIS', 'CARNES', 'CAMARÕES', 'PEIXES'];

    for($linha=0;$linha<count($vetor); $linha+=1)
    {
        //echo $_GET['SOBREMESA'];
        //echo $vetor[$linha];
        while(current($_GET))
        {
            //echo key($_GET);

            $matriz[key($_GET)] = $_GET[key($_GET)];

            next($_GET);
        }
    }

    //echo "<pre>";
    //print_r($matriz);
    //echo "</pre>";

    while(current($matriz))
    {
        //echo key($matriz);
        $matriz2[key($matriz)] = explode(", ", $matriz[key($matriz)]);

        next($matriz);
    }

    //echo "<pre>";
    //print_r($matriz2);
    //echo "</pre>";
    $contador = ['acertos' => null, 'erros' => null];
    while(current($matriz2))
    {

        /*echo key($matriz2);
        echo "<br>";
        echo count($matriz2[key($matriz2)]);
        echo "<br>";*/
        for($linha=0; $linha<count($matriz2[key($matriz2)]); $linha+=1)
        {
            /*echo $matriz2[key($matriz2)][$linha];
            echo "<br>";

            echo "<pre>";
            print_r($cardapio2[key($cardapio2)]);
            echo "</pre>";

            echo "<br>";*/
            //Crie duas listas uma das palavras que acertou e outra das que errou.
            if(in_array($matriz2[key($matriz2)][$linha] , $cardapio2[key($cardapio2)]))
            {
                $acertos[] = $matriz2[key($matriz2)][$linha];
                $contador['acertos']+=1;
                


            }
            else
            {
                $erros[] = $matriz2[key($matriz2)][$linha];
                $contador['erros']+=1;
            }
        }
        next($cardapio2);
        next($matriz2);
    }
echo "Total de Itens: ".$total_de_itens." <br>";
echo "Lista contendo ".$contador['acertos']." Acertos";
    echo "<ul>";
    for($linha=0;$linha<count($acertos); $linha+=1)
    {
        echo "<li>".$acertos[$linha]."</li>";
    }
    echo "</ul>";

echo "Lista contendo ".$contador['erros']." Erros";
    echo "<ul>";
    for($linha=0;$linha<count($erros); $linha+=1)
    {
        echo "<li>".$erros[$linha]."</li>";
    }
    echo "</ul>";

?>