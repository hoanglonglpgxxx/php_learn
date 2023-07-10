<?php

namespace App;

class CollectionAgency implements DebtCollect
{
    public function collect(float $ownedAmount): float
    {
        $guaranteedAmount = $ownedAmount * 0.5;
        return mt_rand($guaranteedAmount, $ownedAmount);
    }
}
