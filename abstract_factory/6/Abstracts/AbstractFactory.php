<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 15:43
 */
namespace Abstracts;

abstract class AbstractFactory {
    abstract public function getBank($bank);
    abstract public function getLoan($loan);
}