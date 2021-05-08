<?php

class lista
{
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
}

$vetor = [1, 2, 3, 4, 5];

$objeto = new lista;

$objeto->criar_lista($vetor);

?>