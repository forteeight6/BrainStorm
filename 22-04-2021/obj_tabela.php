<?php
    //CRIE UM OBJETO QUE TRABALHE COM MANIPULAÇÃO DE TABELAS
    //CRIE UM MÉTODO QUE CRIE UMA TABELA - OK
    //CRIE UM MÉTODO QUE DEFINA O TAMANHO DA TABELA - OK 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS COLUNAS - OK 
    //CRIE UM MÉTODO QUE DEFINA QUAIS SERÃO AS LINHAS - OK
    
    class Tabela
    {
        ///propriedades
        public $largura;

        public $vetor;//array
        public $matriz;//matriz

        ///metodos
        function __construct($vetor, $matriz, $largura)//__construct pode ser considerado o parametro principal.
        {
            $this->largura = $largura;
            
            $this->vetor = $vetor;
            $this->matriz = $matriz;

        }

        function cria_tabela()
        {

            $count = count($this->vetor);
            //$count2 = count($this->matriz);
            //$count3 = count($this->matriz[0]);

            for($x=0; $x<sizeof($this->matriz); $x+=1)
            {
                $colunas[] = sizeof($this->matriz[$x]);
            }

            echo "<table style='width:".$this->largura."%'><tr>";
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

    //TESTE
    $vetor = ['PRODUTO', 'MARCA', 'QUANTIDADE', 'PRECO'];
    
    $matriz = [['arroz','solito','1kg', 5.35],['feijao','solito','1kg', 4.20],['macarrao','solito','1kg', 3.50],['sal','solito','1kg', 5.60],['oleo','solito','1kg', 3.45]];

    $variavel = new Tabela($vetor, $matriz, 50);
    $variavel->cria_tabela();
?>