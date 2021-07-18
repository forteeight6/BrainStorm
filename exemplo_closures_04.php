<?php
//fonte: https://medium.com/@jocielsvs/php-lambda-functions-closures-partials-functions-currying-bb161a98ad17

//Lambda functions/Closures são instancia da classe Closure, esta classe possui alguns métodos

//Exemplo: Closure::fromCallable

class Validator
{
    public const VALIDATOR_EMAIL = "email";

    public function getValidatorCallback($validationType)
    {
        if($validationType == self::VALIDATOR_EMAIL)
        {
            return Closure::fromCallable([$this, 'emailValidation']);
        }
        return Closure::fromCallable([$this, 'genericValidation']);
    }

    private function emailValidation($userData){}
    private function genericValidation($userData){}
}

$validator = new Validator();

$callback = $validator->getValidatorCallback(Validator::VALIDATOR_EMAIL);
$callback($userData);

//NÃO ENTENDI DIREITO, PESQUISAR MAIS

?>