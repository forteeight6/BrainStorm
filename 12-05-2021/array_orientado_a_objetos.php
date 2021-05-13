<?php
/*
A partir de uma array de valores crie um objeto que envia um dado a outro objeto e que esse retorne um valor ao objeto anterior. Exemplo:

Objeto_A -> 5 para o Objeto_B
Objeto_B -> 10 para o Objeto_A
Objeto_A -> 6 para o Objeto_B
Objeto_B -> 12 para o Objeto_A

Insira esses valores dentro de uma array.
*/

class Objeto_A implements Serializable
{

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function Multiplicacao()
    {
        return $this->array;
    }

    public function serialize($array) {
        return file_put_contents("dados.save",serialize($array));
    }
    public function unserialize($array) {
        $this->array = file_get_contents(unserialize($array));
    }
    public function getArray() {
        return $this->array;
    }
    
}

echo file_get_contents("dados.save");

?>

<?php
//IteratorAggregate, serve para criar um vetor com as variaveis do objeto;

/*ArrayAccess, prove o acesso a objetos como se fossem arrays;
{
    Verifica se uma posição existe;
    Posição a ser obtida;
    Atribui um valor a uma posição especifica;
    Destroi uma posição;
}*/

//Countable::count, conta os elementos de um objeto;

//Serialize, usado para salvar dados;

?>