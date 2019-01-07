<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:27
 */
namespace Entity\Bank;

use Interfaces\Bank;

class SBI implements Bank {
    private $bank_name;

    public function __construct()
    {
        $this->bank_name = 'SBI';
    }

    public function getBankName()
    {
        return $this->bank_name;
    }
}