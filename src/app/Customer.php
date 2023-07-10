<?php

namespace App;

class Customer
{
    public function __construct(private array $billingInfo = [])
    {
    }

    public function getBillingInfo()
    {
        return $this->billingInfo;
    }
}
