<?php

class Table 
{
    //Propriedades
    public $repeticao;


    //Métodos
    function linha($number)
    {
        $this->repeticao += $number;
        
        return $this->repeticao;
    }
}

$tabela = new Table();

echo $tabela->linha(5);
echo "<br>";
echo $tabela->linha(7);
echo "<br>";
echo $tabela->linha(7);

?>