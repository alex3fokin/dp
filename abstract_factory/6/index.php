<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:21
 * https://www.javatpoint.com/abstract-factory-pattern
 */
require_once '../../autoload.php';

function testFactoryCreator($bank, $loan_type, $interest_rate, $loan_amount, $years)
{
    $bank_factory = \Factory\FactoryCreator::getFactory('bank');
    $loan_factory = \Factory\FactoryCreator::getFactory('loan');

    $bank = $bank_factory->getBank($bank);
    $loan = $loan_factory->getLoan($loan_type);

    $loan->setInterestRate($interest_rate);
    $loan_payment = $loan->calculateLoanPayment($loan_amount, $years);

    echo "<br>Bank: " . $bank->getBankName();
    echo "<br>Loan: " . $loan_type;
    echo "<br>Interest rate: " . $interest_rate;
    echo "<br>Loan amount: " . $loan_amount;
    echo "<br>Years: " . $years;
    echo $loan_payment;
}

testFactoryCreator('hdfc', 'business', 12.95, 5000000, 10);
testFactoryCreator('icici', 'home', 5.45, 2000000, 5);
testFactoryCreator('sbi', 'education', 3.25, 300000, 3);