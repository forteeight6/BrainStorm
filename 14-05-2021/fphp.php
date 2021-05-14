<?php

class mysql
{
    public $mysql = "mysql:dbname=desire;host=localhost";
    public $login = "root";
    public $password = "";

    public function conectar()
    {
        try
        {
            $this->sql = new PDO(
                $this->mysql, $this->login, $this->password
            );
            //echo "conectado";
        }
        catch(PDOException $excessao)
        {
            echo "FALHOU: ".$excessao->getMessage();
        }
    }

    public function listarBD()
    {
        $comando = "SHOW DATABASES;";

        $dados = $this->sql->query($comando);

        foreach($dados as $dado)
        {
            $array[] = $dado;
        }

        return $array;
    }

    public function login($user, $password)
    {
        $comando = "SELECT usuario, senha FROM usuarios WHERE usuario=".$user." AND senha=".$password.";";
        echo $comando;
    }

    public function createTable($tableName, $primaryKey, $colunas = array())
    {
        $comando = "CREATE TABLE ".$tableName."(".$primaryKey." INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(".$primaryKey."));";

        $this->sql->query($comando);

        while(current($colunas))
        {
            while(current($colunas[key($colunas)]))
            {
                //echo key($colunas[key($colunas)]);
                    //echo $colunas[key($colunas)][key($colunas[key($colunas)])][$linha]."<br>";
                    if(key($colunas) == "str")
                    {
                        $comando = "ALTER TABLE ".$tableName." ADD ".key($colunas[key($colunas)])." VARCHAR(250);";
                        $this->sql->query($comando);
                    }
                    else if(key($colunas) == "int")
                    {
                        $comando = "ALTER TABLE ".$tableName." ADD ".key($colunas[key($colunas)])." INT(250);";
                        $this->sql->query($comando);
                    }
                    else if(key($colunas) == "float")
                    {
                        $comando = "ALTER TABLE ".$tableName." ADD ".key($colunas[key($colunas)])." DECIMAL(15,6);";
                        $this->sql->query($comando);
                    }              
                next($colunas[key($colunas)]);
            }
            next($colunas);
        }
        
        reset($colunas);
        while(current($colunas))
        {
            reset($colunas[key($colunas)]);
            next($colunas);
        }
        reset($colunas);

        $concatenar = null;
        while(current($colunas))
        {
            //echo key($colunas)."<br>";
            while(current($colunas[key($colunas)]))
            {
                //echo key($colunas[key($colunas)])."<br>";
                for($linha=0; $linha<count($colunas[key($colunas)][key($colunas[key($colunas)])]); $linha+=1)
                {
                    //echo count($colunas[key($colunas)][key($colunas[key($colunas)])]);
                    //echo $colunas[key($colunas)][key($colunas[key($colunas)])][$linha]."<br>";
                    
                    if(count($colunas[key($colunas)][key($colunas[key($colunas)])]) > 1 && $linha < (count($colunas[key($colunas)][key($colunas[key($colunas)])]))-1)
                    {
                        $concatenar .= '"'.$colunas[key($colunas)][key($colunas[key($colunas)])][$linha].'", ';
                    }
                    else
                    {
                        $concatenar .= '"'.$colunas[key($colunas)][key($colunas[key($colunas)])][$linha].'"';
                    }

                }

                $comando = "INSERT INTO ".$tableName." (".key($colunas[key($colunas)]).") VALUES(".$concatenar.");";
                echo $comando."<br>";
                $this->sql->query($comando);
                $concatenar = null;

                next($colunas[key($colunas)]);
            }
            next($colunas);
        }
    }

}

?>