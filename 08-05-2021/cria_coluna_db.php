<?php
//Crie um método que adicione Colunas na tabela

class mysql
{
    public function addColuna($var)
    {
        require 'config.php';

        $comando = "ALTER TABLE cronogramas ADD ".$var.";";

        $sql->query($comando);
    }
}

$tarefa = new mysql;

$variavel = "Duolingo VARCHAR(15)";

$tarefa->addColuna($variavel);

?>