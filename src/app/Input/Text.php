<?php

namespace App\Input;

class Text extends Field
{
    public function render($x = 1): string
    {
        return <<<HTML
            <input type="text" name="{$this->name}"/>
        HTML;
    }
}
