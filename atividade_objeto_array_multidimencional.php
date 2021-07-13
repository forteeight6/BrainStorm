<!--1º Faça um objeto que gere uma Matriz e print na tela.-->
<?php
class ArrayMultidimencional
{
    private $array = [];
    public $array1 = [];
    public $array2 = [];

    public function __construct($array1, $array2)
    {
        for($count = 0; $count < count($array1); $count += 1)
        {
            $array[$array1[$count]][$array2[$count]] = null;
        }
        echo "<meta charset='utf8'/>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

$vetor1 = ['João','Pedro','Tiago'];
$vetor2 = ['Maria','Luana','Leticia'];

new ArrayMultidimencional($vetor1, $vetor2);
?>