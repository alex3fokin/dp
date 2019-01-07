<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:41
 */
namespace Entity\Loan;

use Abstracts\Loan;

class EducationLoan extends Loan {
    public function setInterestRate($rate)
    {
        $this->rate = $rate;
    }
}