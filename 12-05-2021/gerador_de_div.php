<?php
require "estilos.php";

class geradorDivs extends estilos
{   
    public function newDiv($conteudo, $id=null, $opcao=null)//Paramentro ID
    {
        echo "<div id='".$id."'>".$conteudo."</div>";

        if($opcao == 1)
        {
            echo "id = ".$id;
        }
    }

    public function newDivs($conteudos=array(), $class=null, $opcao=null)
    {
        $total = count($conteudos);

        echo "<nav style='".$this->padrao['box1']."'>";
            for($cont=0; $cont<$total; $cont+=1)
            {
                echo $this->array[$cont];
            }
        echo "</nav>";
    }
}

?>