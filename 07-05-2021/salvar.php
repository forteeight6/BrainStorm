<?php
    class Salvamento
    {
        public $salvar;

        public function salvar($salvar)
        {
            require 'config.php';

            $comando = "INSERT INTO cronogramas(tarefa_1) VALUES('".$salvar."')";
            print_r($salvar);
            try {
                $sql->query($comando);
            } catch (PDOException $salvamento) {
                echo "FALHOU: ".$salvamento->getMessage();
            }

            //header("Location: cronograma.php");
        }
    }
    
    $salvar = new Salvamento;

    $chave = key($_POST);
    $salvar->salvar($_POST[$chave]);

?>