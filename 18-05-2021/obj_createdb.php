<?php

class createdb
{
    public function __construct()
    {
        echo "<meta charset='utf8'/>";
    }

    public function config($usuario, $senha)
    {
        $acessar = "mysql:dbname=".null.";host=localhost;";
        $this->usuario = $usuario;
        $this->senha = $senha;

        try
        {
            $this->dados = new PDO(
                $acessar, $this->usuario, $this->senha
            );
            echo "Conectado com Sucesso.<br>";

        }
        catch(PDOException $e)
        {
            echo "FALHOU: ".$e->getMessage();
        }

    }

    public function newDatabase($nome)
    {
        
        $comando = "SHOW DATABASES";
        
        foreach($this->dados->query($comando) as $dado)
        {
            $array[] = $dado;
        }

        $verifica = null;
        for($linha=0;$linha<count($array);$linha+=1)
        {       
            if(in_array($nome, $array[$linha]))
            {
                $verifica = $nome;
            }
        }

        if($verifica != null)
        {
            $comando = "CREATE DATABASE ".$nome.";";
            
            try
            {
                $this->dados->query($comando);
                echo "Banco de dados criado com sucesso.<br>";
            }
            catch(PDOException $e)
            {
                echo "FALHOU: ".$e->getMessage();
            }
        }
        else
        {
            echo "Banco de Dados Já existe.<br>";
        }
        

    }

    public function conectarDatabase($nome)
    {
        $comando = "SHOW DATABASES";
        
        foreach($this->dados->query($comando) as $dado)
        {
            $array[] = $dado;
        }

        $nome = strtolower($nome);
        $verifica = null;
        for($linha=0;$linha<count($array);$linha+=1)
        {       
            if(in_array($nome, $array[$linha]))
            {
                $verifica = $nome;
            }
        }

        if($verifica != null)
        {
            $conectar = "mysql:dbname=".$verifica.";host=localhost";

            try
            {
                $dbprojeto = new PDO
                (
                    $conectar, $this->usuario, $this->senha
                );
                echo "Conectado com o Projeto.";
            }
            catch(PDOExcepton $e)
            {
                echo "FALHOU: ".$e->getMessage();
            }
        }
        else
        {
            echo "Banco de Dados não existe.";
        }

    }

    public function createTable($matriz=[])
    {
        //$matriz = ["CADASTROS" => ["USUARIO" => ["NOME" => ["JOAO", "MARIA", "PEDRO"], "EMAIL" => ["JOAO@GMAIL.COM", "MARIA@GMAIL.COM", "PEDRO@GMAIL.COM"], "SENHA" => [123, 321, 231]], "ADMINISTRADOR" => []], "CURSOS" => []];
        $first_dimension = $matriz;
        $second_dimension = $matriz[key($matriz)];
        $third_dimension = $matriz[key($matriz)][key($matriz[key($matriz)])];
        $fourth_dimension = $matriz[key($matriz)][key($matriz[key($matriz)])][key($matriz[key($matriz)][key($matriz[key($matriz)])])];
        $fifth_dimension = $matriz[key($matriz)][key($matriz[key($matriz)])][key($matriz[key($matriz)][key($matriz[key($matriz)])])][key($matriz[key($matriz)][key($matriz[key($matriz)])][key($matriz[key($matriz)][key($matriz[key($matriz)])])])];
        
        
        
        echo "<br>";
        while(current($first_dimension)) 
        {
            echo key($first_dimension)."<br>";
            
            while(current($second_dimension))
            {
                echo key($second_dimension)."</br>";
                while(current($third_dimension))
                {
                    echo key($third_dimension)."<br>";
                    while(current($fourth_dimension))
                    {
                        echo key($fourth_dimension)."<br>";

                        while(current($fifth_dimension))
                        {
                            echo key($fifth_dimension)."<br>";

                            next($fifth_dimension);
                        }
                        reset($fifth_dimension);
                        next($fourth_dimension);
                    }

                    next($third_dimension);
                }

                next($second_dimension);
            }
            
            next($first_dimension);
        }
           
    }
    
}

?>