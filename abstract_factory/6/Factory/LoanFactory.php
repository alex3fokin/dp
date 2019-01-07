<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:47
 */
namespace Factory;

use Abstracts\AbstractFactory;
use Entity\Loan\BusinessLoan;
use Entity\Loan\EducationLoan;
use Entity\Loan\HomeLoan;

class LoanFactory extends AbstractFactory {
    public function getBank($bank) {
        return null;
    }

    public function getLoan($loan) {
        switch(strtolower($loan)) {
            case 'home':
                return new HomeLoan();
            case 'business':
                return new BusinessLoan();
            case 'education':
                return new EducationLoan();
            default:
                return null;
        }
    }
}