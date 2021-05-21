<?php

class Itens
{
    public function __construct()
    {
        echo "<meta charset='utf8'/>";
    }

    public function newItens($itens = [])//$vetor_de_nome_de_cada_item
    {
        for($linha=0; $linha<count($itens); $linha+=1)
        {
            echo "<label>".$itens[$linha].": </label>";
            echo "<br>";
            echo "<textarea style='width:99%' name='".$itens[$linha]."'></textarea>";
            
            echo "<br>";
            echo "<br>";
        }
    }
}

?>