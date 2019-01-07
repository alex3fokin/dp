<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:25
 */
namespace Entity\Bank;

use Interfaces\Bank;

class ICICI implements Bank {
    private $bank_name;

    public function __construct()
    {
        $this->bank_name = 'ICICI';
    }

    public function getBankName() {
        return $this->bank_name;
    }
}