<?php

class estilos
{
    public $padrao = ['box1' => "background-color:green; width:100%; height:100%;"];

    public $menuMetro = ['box2' => "background-color:blue; width:10%; height:10%; display:inline-block; margin:1%" , 'box3' => "margin-top:15%; display:block; margin-left:auto; margin-right:auto"];

    public $conteudos;

    public function choice($choice, $padrao=null)
    {
        switch($choice)
        {
            case "menuMetro":
                $this->array[] = "<div style='".$this->menuMetro['box2']."'><button type='submit' name='".$this->conteudos[$cont]."' style='".$this->menuMetro['box3']."'>".$this->conteudos[$cont]."</button></div>";
                break;
            default:
                echo "<meta charset='utf8' />"; 
                echo "OPÇÃO INVALIDA";
        }
    }
} 

?>