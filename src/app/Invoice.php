<?php

namespace App;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount)
    {

        if ($amount <= 0) {
            throw new \InvalidArgumentException('Less then 0');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new \App\Exception\Missing();
        }

        echo 'Processing $' . $amount . ' invoice -';

        sleep(1);
        echo 'OK' . PHP_EOL;
    }
}
