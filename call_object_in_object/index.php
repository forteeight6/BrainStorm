<?php
//Chamando um Objeto dentro de Outro Objeto

class BancoDeDados
{
    public function __construct()
    {
        echo "funfou!!";
    }
}

class teste
{
    public function __construct()
    {
        return new BancoDeDados;
    }
}

new teste;

?>