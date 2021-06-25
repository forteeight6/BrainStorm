<!--Implements é usado para implementar uma interface na programação.
O que é uma interface?
https://imasters.com.br/back-end/usando-interfaces-de-objetos-em-php
-->
<?php
//Métodos Magicos: https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.serialize


//Interfaces padrões: IteratorAggregate, ArrayAccess, Countable, Serializable
class Collection implements IteratorAggregate, ArrayAccess, Countable, Serializable
{
    private $collection;
    private $iterator;
    private $count = 0;
    public $data = [];
    private $position = 0;

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

    //https://www.php.net/manual/pt_BR/arrayaccess.offsetexists.php
    public function offsetSet($offset, $value)
    {
        var_dump(__METHOD__);
    }

    public function offsetExists($var)
    {
        var_dump(__METHOD__);

        if($var == "foobar")
        {
            return true;
        }
        return false;
    }

    public function offsetUnset($var)
    {
        var_dump(__METHOD__);
    }

    public function offsetGet($var)
    {
        var_dump(__METHOD__);
        return "value";
    }

    //https://www.php.net/manual/pt_BR/countable.count.php

    public function count()
    {
        return ++$this->count;
    }

    //https://www.php.net/manual/pt_BR/serializable.serialize.php

    public function serialize()
    {
        printf("- Serialize of %s called.\n", static::class);
        return serialize($this->data);
    }

    public function unserialize($serialized)
    {
        printf("- Unserialize of %s called.\n", static::class);
        $this->data = unserialize($serialized);
    }

    //https://www.php.net/manual/pt_BR/class.iterator.php
    function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    ////Métodos Magicos: https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.serialize

    // Support looking up nodes using $obj->key
    // Also, call methods without parenthesis: $obj->method
    public function __get($name)
    {
        if (method_exists($this, $name))
        {
            return $this->$name();
        }
            elseif ($this->exists($name))
        {
            return $this[$name];
        }

            return null;
    }

    // Support setting values with $obj->key = $value
    public function __set($name, $value)
    {
        if (method_exists($this, $name))
        {
            return $this->$name($value);
        }

        $this[$name] = $value;
        return $this;
    }

    // Support cloning this object
    public function __clone()
    {
        $this->collection = clone $this->collection;
        $this->iterator = clone $this->iterator;
    }

    // Support echo $obj
    public function __toString()
    {
        print_r($this->collection->getArrayCopy());
    }

}

$collection = new Collection(array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    'key4' => 'value4',
    'key5' => 'value5'
    )); 

    echo $collection[0];       // Error
    echo $collection['key1'];  // "value1"
    $collection->key1;    // "value1"
    //rewind($collection);  // "value1"
    echo end($collection);     // "value5"
    //$collection->first(); // "value1"
    //$collection->first;   // "value1"
    //$collection->last();  //" value5"
    //$collection->last;    // "value5"
    

?>