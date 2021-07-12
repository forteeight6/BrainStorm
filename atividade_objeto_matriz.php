<!--1º Faça um objeto que gere uma Matriz e print na tela.-->

<?php

class Matriz
{
    private $matriz = array();

    public function __construct($array1 = array(), $array2 = array())
    {
        for($count = 0; $count < count($array1); $count+=1)
        {
            $matriz[$array1[$count]][$array2[$count]] = null;
        }

        var_dump($matriz);
    }
}

$vetor1 = ['a', 'b', 'c'];
$vetor2 = ['c', 'b', 'a'];

new Matriz($vetor1, $vetor2);

?>