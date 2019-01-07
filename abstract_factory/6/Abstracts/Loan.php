<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:29
 */

namespace Abstracts;

abstract class Loan
{
    protected $rate;

    abstract public function setInterestRate($rate);

    public function calculateLoanPayment($loan_amount, $years)
    {
        $n = $years * 12;
        $rate = $this->rate / 1200;
        $EMI = (($rate * pow((1 + $rate), $n)) / ((pow((1 + $rate), $n)) - 1)) * $loan_amount;

        return "<br>your monthly EMI is ". $EMI ." for the amount".$loan_amount." you have borrowed<br>";
    }
}