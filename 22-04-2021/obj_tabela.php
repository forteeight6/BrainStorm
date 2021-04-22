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
            $count2 = count($this->matriz);
            $count3 = count($this->matriz[0]);

            echo "<table style='width:".$this->largura."%'><tr>";
            for($x=0; $x<$count; $x+=1)
            {
                echo "<th>".$this->vetor[$x]."</th>";
            }
            echo "</tr>";
            
            for($linha=0; $linha<$count2; $linha+=1)
            {
                echo "<tr>";
                for($coluna=0; $coluna<$count3; $coluna+=1)
                {
                    echo "<td>".$this->matriz[$linha][$coluna]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    //TESTE
    $vetor = ['PRODUTO', 'MARCA', 'QUANTIDADE', 'PRECO'];
    
    $matriz = [['arroz','solito','1kg', 5.35],['feijao','solito','1kg', 4.20],['macarrao','solito','1kg', 3.50],['sal','solito','1kg', 5.60],['oleo','solito','1kg', 3.45]];

    $variavel = new Tabela($vetor, $matriz, 100);
    $variavel->cria_tabela();
?>