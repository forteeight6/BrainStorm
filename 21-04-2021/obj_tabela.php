<?php
    //CRIE UM OBJETO QUE TRABALHE COM MANIPULAÇÃO DE TABELAS
    //CRIE UM MÉTODO QUE CRIE UMA TABELA - OK
    //CRIE UM MÉTODO QUE DEFINA O TAMANHO DA TABELA - OK 
    //CRIE UM MÉTODO QUE CRIE COLUNAS E ADICIONE OS DADOS - 
    //CRIE UM MÉTODO QUE CRIE LINHAS E ADICIONE OS DADOS - 
    
    class Tabela
    {
        ///propriedades
        public $largura;
        public $linha_principal;//array
        public $linhas_secundaria;//matriz

        ///metodos
        function __construct($largura)//__construct pode ser considerado o parametro principal.
        {
            $this->largura = $largura;
        }

        function cria_tabela()
        {
            echo "<table style='width:".$this->largura."%'>";
            echo "<tr>";
            
                /*echo "<th>".$this->linha_principal."</th>";*/
                echo "<th>TABELA DINAMICA</th>";

            echo "</tr>";
            
            /*echo "<tr>";

            echo "<td>".$this->linhas_secundaria."</td>";

            echo "</tr>";*/
            
            echo "</table>";
        }
    }

    //TESTE
    $variavel = new Tabela(100);
    $variavel->cria_tabela();
?>