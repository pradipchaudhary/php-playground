<?php

// define a class representing a Back Account
class BankAccount
{
    private $balance;

    // Constructor to initialize balance
    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }
    // Method to deposit money into the account
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    // Method to withdraw money from the account
    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return $amount;
        } else {
            echo "Insufficient funds!\n";
            return 0;
        }
    }

    // Method to get the current balance
    public function getBalance()
    {
        return $this->balance;
    }
}