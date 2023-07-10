<?php

namespace App;

class InvoicesCollection implements \Iterator
{
    public function __construct(public array $invoices)
    {
    }

    public function current()
    {
        echo __METHOD__ . PHP_EOL;
        return current($this->invoices);
    }
    public function next()
    {
    }
    public function key()
    {
    }
    public function valid()
    {
    }
    public function rewind()
    {
    }
}
