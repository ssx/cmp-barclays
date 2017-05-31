<?php namespace Banking\Banks;

use Banking\Interfaces\BankInterface;

class BarclaysBank implements BankInterface {

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function deposit($pence): int
    {
        // TODO: Implement deposit() method.
    }

    public function withdraw($pence): int
    {
        // TODO: Implement withdraw() method.
    }

    public function getInterestRate()
    {
        return 0.01;
    }

}