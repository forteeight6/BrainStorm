<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Lambda functions/Closures são instancia da classe Closure, esta classe possui alguns métodos

//Exemplo: Closure::bindTo/Closure::bind

class Person
{
    protected $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
}

$person1 = new Person(25);
$person2 = new Person(18);

$addAge = function(int $num)
{
    return $num + $this->age;
};

$closurePerson1 = $addAge->bindTo($person1, Person::class);

$closurePerson2 = Closure::bind($addAge, $person2, Person::class);

echo $closurePerson1(6)."<br>"; //31
echo $closurePerson2(6)."<br>"; //24

$person1->setAge(20);
$person2->setAge(22);

echo $closurePerson1(6)."<br>"; //26
echo $closurePerson2(6); //28

//Nesse exemplo estamos usando os métodos bindTo e bind(static) para vincular definitivo a Closure $addAge nos objetos $person1 e $person2 respectivamente, esse método retorna uma nova Closure que estamos atribuindo a $clorurePerson1 e $closurePerson2 novamente o resultado retornado é diferente.

?>