<?php

namespace App\Customers;

class Customer
{
    private ?\App\PaymentDetail\PaymentProfile $paymentProfile = null;

    public function getPaymentProfile(): ?\App\PaymentDetail\PaymentProfile
    {
        return $this->paymentProfile;
    }
}
