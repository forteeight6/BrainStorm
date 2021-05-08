<?php

class lista implements IteratorAggregate
{

    public $altura = 1.57;
    public $peso = 60.0;

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
}

$vetor = [1, 2, 3, 4, 5];

$objeto = new lista;

//$objeto->criar_lista($vetor);
print_r($objeto->getIterator($vetor));

?>