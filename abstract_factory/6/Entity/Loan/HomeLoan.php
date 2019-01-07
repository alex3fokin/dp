<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:36
 */
namespace Entity\Loan;

use Abstracts\Loan;

class HomeLoan extends Loan {
    public function setInterestRate($rate)
    {
        $this->rate = $rate;
    }
}