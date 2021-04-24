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

    //Crie um método que de uma cor ao campo vetor - OK
    //Crie um método que de uma cor aos campos da matriz - OK
    //Crie um método que crie uma tabela composta -  
    
    class Tabela
    {
        ///propriedades
        public $largura;

        public $vetor;//array
        public $matriz;//matriz

        public $titulo;

        public $cor_campo_tipos;
        public $cor_fonte_tipos;
        public $cor_campo_valores;
        public $cor_fonte_valores;
        public $cor_campo_titulo;
        public $cor_fonte_titulo;

        ///metodos
        function __construct($vetor, $matriz, $largura)//__construct pode ser considerado o parametro principal.
        {
            $this->largura = $largura;
            
            $this->vetor = $vetor;
            $this->matriz = $matriz;

        }

        function cores_da_tabela($cor_campo_tipos=null, $cor_fonte_tipos=null, $cor_campo_valores=null, $cor_fonte_valores=null, $cor_campo_titulo=null, $cor_fonte_titulo=null)
        {
            $this->cor_campo_tipos = $cor_campo_tipos;
            $this->cor_fonte_tipos = $cor_fonte_tipos;
            $this->cor_campo_valores = $cor_campo_valores;
            $this->cor_fonte_valores = $cor_fonte_valores;
            $this->cor_campo_titulo = $cor_campo_titulo;
            $this->cor_fonte_titulo = $cor_fonte_titulo;
        }

        function titulo_da_tabela($titulo)
        {
            $this->titulo = $titulo;
        }

        function cria_tabela($invert = false)
        {

            $count = count($this->vetor);
            
            for($x=0; $x<sizeof($this->matriz); $x+=1)//array de tamanho de colunas.
            {
                $colunas[] = sizeof($this->matriz[$x]);
            }

            echo "<table style='width:".$this->largura."%'>";

            if($invert == true)
            {
                //echo "inverter tabela";
                $count+=2;
                echo "<tr><th style='background-color:".$this->cor_campo_titulo."; color:".$this->cor_fonte_titulo."' colspan=".$count."><h1>".$this->titulo."</h1></th></tr>";

                $coluna=0;
                for($x=0;$x<sizeof($this->vetor);$x+=1)
                {
                    echo "<tr>";
                    echo "<th style='background-color:".$this->cor_campo_tipos."; color:".$this->cor_fonte_tipos."'>".$this->vetor[$x]."</th>";
                    
                    for($linha=0;$linha<sizeof($this->matriz);$linha+=1)
                    {
                        echo "<td style='background-color:".$this->cor_campo_valores."; color:".$this->cor_fonte_valores."'>".$this->matriz[$linha][$coluna]."</td>";
                    }
                    echo "</tr>";
                    $coluna+=1;
                }
                echo "</table>";
            }
            else
            {

                if(empty($this->titulo) == FALSE)
                {
                    echo "<tr><th style='background-color:".$this->cor_campo_titulo."; color:".$this->cor_fonte_titulo."' colspan=".$count."><h1>".$this->titulo."</h1></th></tr>";
                }    

                echo "<tr>";
                for($x=0; $x<$count; $x+=1)
                {
                    echo "<th style='background-color:".$this->cor_campo_tipos."; color:".$this->cor_fonte_tipos."'>".$this->vetor[$x]."</th>";
                }
                echo "</tr>";
                
                for($linha=0; $linha<sizeof($this->matriz); $linha+=1)
                {
                    echo "<tr>";
                    for($coluna=0; $coluna<$colunas[$coluna]; $coluna+=1)
                    {
                        if(empty($this->matriz[$linha][$coluna]) == FALSE)
                        {
                            echo "<td style='background-color:".$this->cor_campo_valores."; color:".$this->cor_fonte_valores."'>".$this->matriz[$linha][$coluna]."</td>";
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
    $variavel->cores_da_tabela("red", "white", "red", "white", "red", "white");
    $variavel->cria_tabela(TRUE);
?>