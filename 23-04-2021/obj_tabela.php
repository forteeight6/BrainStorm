<?php
    //CRIE UM OBJETO QUE TRABALHE COM MANIPULAÇÃO DE TABELAS
    //CRIE UM MÉTODO QUE CRIE UMA TABELA - OK
    //CRIE UM MÉTODO QUE DEFINA O TAMANHO DA TABELA - OK 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS COLUNAS - OK 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS LINHAS - OK
    
    /*Métodos para formatação de tabela*/
    //Crie um método que de um titulo para a tabela - ok
    
    //Crie um método que inverta a tabela - OK
    //1 2 3 - 1 4 7
    //4 5 6 - 2 5 8
    //7 8 9 - 3 6 9

    //Crie um método que de uma cor ao campo vetor - 
    //Crie um método que de uma cor aos campos da matriz -
    //Crie um método que crie uma tabela composta -  
    
    class Tabela
    {
        ///propriedades
        public $largura;

        public $vetor;//array
        public $matriz;//matriz

        public $titulo;

        ///metodos
        function __construct($vetor, $matriz, $largura)//__construct pode ser considerado o parametro principal.
        {
            $this->largura = $largura;
            
            $this->vetor = $vetor;
            $this->matriz = $matriz;

        }

        function titulo_da_tabela($titulo)
        {
            $this->titulo = $titulo;
        }

        function cria_tabela_simples($invert = false)
        {

            $count = count($this->vetor);
            
            for($x=0; $x<sizeof($this->matriz); $x+=1)//array de tamanho de colunas.
            {
                $colunas[] = sizeof($this->matriz[$x]);
            }

            echo "<table style='width:".$this->largura."%'>";

            if(empty($this->titulo) == FALSE)
            {
                echo "<tr><th colspan=".$count."><h1>".$this->titulo."</h1></th></tr>";
            }

            if($invert == true)
            {
                //echo "inverter tabela";

                $coluna=0;
                for($x=0;$x<sizeof($this->vetor);$x+=1)
                {
                    echo "<tr>";
                    echo "<th>".$this->vetor[$x]."</th>";
                    
                    for($linha=0;$linha<sizeof($this->matriz);$linha+=1)
                    {
                        echo "<td>".$this->matriz[$linha][$coluna]."</td>";
                    }
                    echo "</tr>";
                    $coluna+=1;
                }
                echo "</table>";
            }
            else
            {

                echo "<tr>";
                for($x=0; $x<$count; $x+=1)
                {
                    echo "<th>".$this->vetor[$x]."</th>";
                }
                echo "</tr>";
                
                for($linha=0; $linha<sizeof($this->matriz); $linha+=1)
                {
                    echo "<tr>";
                    for($coluna=0; $coluna<$colunas[$coluna]; $coluna+=1)
                    {
                        if(empty($this->matriz[$linha][$coluna]) == FALSE)
                        {
                            echo "<td>".$this->matriz[$linha][$coluna]."</td>";
                        }
                        else
                        {
                            $this->matriz[$linha][$coluna] = "VAZIO";
                            echo "<td>".$this->matriz[$linha][$coluna]."</td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    }

    /*TESTE*/
    $vetor = ['PRODUTO', 'MARCA', 'QUANTIDADE', 'PRECO'];
    
    $matriz = [['arroz','solito','1kg', 5.35],['feijao','solito','1kg', 4.20],['macarrao','solito','1kg', 3.50],['sal','solito','1kg', 5.60],['oleo','solito','1kg', 3.45]];

    $variavel = new Tabela($vetor, $matriz, 50);
    $variavel->titulo_da_tabela("Porecatu");
    $variavel->cria_tabela_simples(TRUE);
?>