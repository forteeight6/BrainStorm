<?php
//https://www.devmedia.com.br/php-modificadores-de-acesso/38438#:~:text=RUN-,private,acessar%20esse%20atributo%20ou%20m%C3%A9todo.

class lista implements IteratorAggregate
{

    public $altura = 1.57;
    public $peso = 60.0;

    private $items = [];

    public function criar_lista($item)
    {
        $count = count($item);

        echo "<ul>";
            for($inicio = 0; $inicio<$count; $inicio+=1)
            {
                echo "<li>".$item[$inicio]."</li>";
            }
        echo "</ul>";
    }

    public function getIterator($item)
    {
        return new ArrayIterator($this);
    }

    public function getIterator2($items = [])
    {
        return 
        (
            function()
            {
                while(list($key, $val) = each($this->items))
                {
                    //RETORNA: OBJETO DE CLASSE GENERATOR;
                    yield $key => $val;
                }
            }
        );
    }
}

$vetor = [1, 2, 3, 4, 5];

$objeto = new lista;

//$objeto->criar_lista($vetor);
//print_r($objeto->getIterator($vetor));
$array = $objeto->getIterator($vetor);
echo $array['altura'];
//print_r($objeto->getIterator2($vetor));

?>