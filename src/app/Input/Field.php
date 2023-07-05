<?php

namespace App\Input;

class Field
{
    public function __construct(protected string $name)
    {
    }
    public function render(): string
    {
        return '';
    }
}
