<?php
class createCronos
{
    public function __construct()
    {
        echo "<meta charset='utf-8' />";
    }

    public function newCronos($vetor_de_items=[])//$vetor_de_items
    {
        $this->vetor_de_items = $vetor_de_items;

        $this->items[] = "Data do Cronograma ".date('d/m/y');
        $this->items[] = "<br>";
        for($linha=0; $linha<count($vetor_de_items); $linha+=1)
        {
            $this->items[] = "<label>".$this->vetor_de_items[$linha].": </label>";
            $this->items[] = "<input type='text' name='".$this->vetor_de_items[$linha]."' />";
            $this->items[] = "<br>";
        }

        echo "<form method='post'>";
        for($linha=0; $linha<count($this->items); $linha+=1)
        {
            echo $this->items[$linha];
        }
    }

    public function salvarCronos($nome_do_bd, $host, $user, $password)//Salva ou cria um novo cronograma //$nome_do_bd + $user + $password
    {
        $sql = "mysql:dbname=".$nome_do_bd.";host=".$host.";";
        $banco_de_dados = "SHOW DATABASES;";
        $colunas = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'cronos' AND TABLE_NAME = 'cronogramas';";

        //var_dump($this->vetor_de_items);
        //listar todas as colunas na tabela - ok
        //verificar se todas as colunas existem - ok
        //Caso não criar uma nova coluna - ok

        //listar todas as datas ja inseridas na tabela e selecionar a data atual - 

        try
        {

            $dados = new PDO(
                $sql, $user, $password
            );

            //verifica se banco existe
            foreach($dados->query($banco_de_dados) as $dado)
            {
                $array[] = $dado['Database'];
            }

            for($linha=0; $linha<count($array); $linha+=1)
            {
                if($array[$linha] == $nome_do_bd)
                {
                    echo "<button type='submit'>Enviar</button>";
                    break;
                }
            }
            
            //verifica se coluna existe
            foreach($dados->query($colunas) as $coluna)
            {
                $array_colunas[] = $coluna;
            }
            
            for($linha=0; $linha<count($array_colunas); $linha+=1)
            {
                $array_colunas[$linha] = $array_colunas[$linha]['COLUMN_NAME'];
            }
            //var_dump($array_colunas[1]);
            for($linha=0;$linha<count($this->vetor_de_items); $linha+=1)
            {
                //echo $this->vetor_de_items[$linha];
                if(in_array($this->vetor_de_items[$linha], $array_colunas))
                {
                    //echo "existe<br>";
                }
                else
                {
                    //echo "nao existe<br>";
                    $comando = "ALTER TABLE cronogramas ADD ".$this->vetor_de_items[$linha]." VARCHAR(50);";
                    $dados->query($comando);
                }
            }
        }
        catch(PDOException $e)
        {
            echo "FALHOU: ".$e->getMessage();
        }
    }
}
?>

<?php
$objeto = new createCronos();

$array = ["06:00_Acordar", "Limpeza_e_Organizacao", "Day_Trade", "Treinamento_Fisico", "Github", "Duolingo"];

$objeto->newCronos(
    $array
);

$objeto->salvarCronos(
    'cronos', 'localhost', 'root', ''
);
?>