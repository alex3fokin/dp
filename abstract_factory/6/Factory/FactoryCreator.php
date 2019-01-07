<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:50
 */
namespace Factory;

class FactoryCreator {
    public static function getFactory($factory) {
        switch(strtolower($factory)) {
            case 'bank':
                return new BankFactory();
            case 'loan':
                return new LoanFactory();
            default:
                return null;
        }
    }
}