<?php

namespace App\Input;

abstract class Field implements Renderable
{
    public function __construct(protected string $name)
    {
    }
}
