<?php
class Transaction
{
    //var trong class là Property, func là method
    private float $amount;
    private string $description;
    //private thì chỉ access được trong class

    //Constructor
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

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

    public function getAmount()
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Detruct' . $this->description . '</br>';
    }
}
