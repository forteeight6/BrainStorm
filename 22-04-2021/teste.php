<?php
//Crie um objeto que receba dois numeros e retorne a sua soma.
class Teste
{
    //propriedades
    public $numero1;
    public $numero2;

    function Soma($numero1, $numero2)
    {
        $soma = $numero1 + $numero2;
        
        return $soma;
    }

    function Contador($vetor)
    {
        $count = count($vetor);
        return $count;
    }
}

$teste = new Teste();
$vetor = [1,2,3,4,5];

echo $teste->Contador($vetor);
?>