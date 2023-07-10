<?php

namespace App;

interface DebtCollect
{
    public const MY_CONSTANT = 1;
    public function collect(float $ownedAmount): float;
}
