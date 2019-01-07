<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:44
 */
namespace Factory;

use Abstracts\AbstractFactory;
use Entity\Bank\HDFC;
use Entity\Bank\ICICI;
use Entity\Bank\SBI;

class BankFactory extends AbstractFactory {
    public function getBank($bank) {
        switch(strtolower($bank)) {
            case 'hdfc':
                return new HDFC();
            case 'icici':
                return new ICICI();
            case 'sbi':
                return new SBI();
            default:
                return null;
        }
    }

    public function getLoan($loan) {
        return null;
    }
}