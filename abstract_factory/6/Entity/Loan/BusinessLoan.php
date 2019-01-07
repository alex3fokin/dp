<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:38
 */
namespace Entity\Loan;

use Abstracts\Loan;

class BusinessLoan extends Loan {
    public function setInterestRate($rate)
    {
        $this->rate = $rate;
    }
}