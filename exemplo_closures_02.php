<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Lambda functions/Closures são instancia da classe Closure, esta classe possui alguns métodos

//Exemplo: Closure:call

class Person
{
    protected $age;

    public function __construct($age)
    {
        $this->age = $age;
    }
}

$person1 = new Person(25);
$person2 = new Person(18);

//Lembrando que tem como criar cararcteristicas para dentro de um objeto para ser usado posteriormente.

$addAge = function(int $num)
{
    return $num + $this->age;
};

echo $addAge->call($person1, 3)."<br>"; //28
echo $addAge->call($person2, 5); //23

?>