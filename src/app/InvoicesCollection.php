<?php

namespace App;

use Traversable;

class InvoicesCollection extends Collection
{
    private int $key;


    /* Nếu dùng Iterator interface
     * public function current()
    {
        echo __METHOD__ . PHP_EOL;
        return $this->invoices[$this->key];
    }

    public function next()
    {
        echo __METHOD__ . PHP_EOL;
        ++$this->key;
    }

    public function key()
    {
        echo __METHOD__ . PHP_EOL;
        return $this->key;
    }

    public function valid()
    {
        echo __METHOD__ . PHP_EOL;
        return isset($this->invoices[$this->key]);
    }

    public function rewind()
    {
        echo __METHOD__ . PHP_EOL;

        $this->key=0;
    }*/

}
