<?php

Serializable
{
    /* Métodos */
    abstract public serialize() : string|null
    abstract public unserialize(string $serialized) : void
}

?>