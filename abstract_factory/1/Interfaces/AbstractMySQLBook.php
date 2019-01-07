<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:36
 */
namespace Interfaces;

use Interfaces\AbstractBook;

abstract class AbstractMySQLBook extends AbstractBook {
    private $subject = "MySQL";
}