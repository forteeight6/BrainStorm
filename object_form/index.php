<?php namespace formulario;
//Objeto que cria formulario com redirecionamento

class Formulario
{
    public function __construct($ACTION=NULL)
    {
        echo "<meta charset='utf8'/>";
        echo "<form method='POST' action='".$ACTION."'>";
        echo "Nome do Banco de Dados: ";
        echo "<input type='text' name='db'/>";
        echo "<button type='submit'>Novo</button>";
        echo "</form>";
    }
}

new Formulario();

?>