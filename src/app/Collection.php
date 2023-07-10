<?php

namespace App;

class Collection  implements \IteratorAggregate
{
    public function __construct(private array $items)
    {
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->items);
    }
}