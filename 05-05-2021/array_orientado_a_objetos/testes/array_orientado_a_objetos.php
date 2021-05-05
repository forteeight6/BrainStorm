<?php

class Collection implements IteratorAggregate, ArrayAccess, Countable, Serializable
{
    private $collection;
    private $iterator;

    public function __construct($value = array())
    {
        $this->collection = new ArrayObject($value, ArrayObject::ARRAY_AS_PROPS);
        $this->iterator = $this->collection->getIterator();
    }
}

?>