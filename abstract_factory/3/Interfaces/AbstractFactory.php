<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:23
 */
namespace Interfaces;

abstract class AbstractFactory {
    abstract public function getColor($color);
    abstract public function getShape($shape_type);
}