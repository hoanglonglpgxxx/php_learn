<?php

class Customer
{
    private ?Payment\PaymentDetail\PaymentProfile $paymentProfile = null;

    public function getPaymentProfile(): ?Payment\PaymentDetail\PaymentProfile
    {
        return $this->paymentProfile;
    }
}
