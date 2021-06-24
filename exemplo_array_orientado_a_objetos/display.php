<!--Implements é usado para implementar uma interface na programação.
O que é uma interface?
https://imasters.com.br/back-end/usando-interfaces-de-objetos-em-php
-->
<?php

//Interfaces padrões: IteratorAggregate, ArrayAccess, Countable, Serializable
class Collection implements IteratorAggregate, ArrayAccess, Countable, Serializable
{
    private $collection;
    private $iterator;

    public function __construct($value = array())
    {
        //ArrayObject: Classe Padrão.
        $this->collection = new ArrayObject(
            $value, ArrayObject::ARRAY_AS_PROPS
        );
        $this->iterator = $this->collection->getIterator();
    }

    //ref: https://www.php.net/manual/pt_BR/class.iteratoraggregate.php
    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

?>