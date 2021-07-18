<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

$name = "Jociel";

$printName = function()
{
    echo "My name is ". $name;
};

//$printName();

// PHP Notice:  Undefined variable: name

$printNameClosure = function() use ($name)
{
    echo "My name is ".$name;
};

$printNameClosure(); //My name is Jociel

//Lambda functions/Closures são instancia da classe Closure, esta classe possui alguns métodos

//Exemplo: Closure:call
?>