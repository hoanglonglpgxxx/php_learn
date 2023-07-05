<?php

namespace App\Transactions;

class Transaction
{
    public static int $count = 0;
    private ?\App\Customers\Customer $customer = null;
    private string $status;

    //Constructor kiểu cũ(below PHP 8.0)
    /*  public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    } */

    public function addTax(float $rate): self
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    /* public function getAmount()
    {
        return $this->amount;
    }
     public function setAmount($amount)
    {
        $this->amount = $amount;
    } */
    //SHORTHAND CONSTRUCTOR : Property promotion
    //Combine class fields, constructor definition & variable assignments in 1 SYNTAX
    public function __construct(
        private float $amount, //promote variable
        private string $description //promote variable
    ) {
        $this->setStatus(\App\Enum\Status::PENDING);
        self::$count++;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setStatus($status): self
    {
        if (!isset(\App\Enum\Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status: ' . $status);
        }
        $this->status = $status;
        return $this;
    }
}
