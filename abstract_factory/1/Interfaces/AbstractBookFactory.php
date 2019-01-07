<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:28
 */
namespace Interfaces;

abstract class AbstractBookFactory {
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}