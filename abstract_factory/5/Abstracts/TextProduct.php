<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:32
 */
namespace Abstracts;

abstract class TextProduct {
    protected $text;
    abstract public function makeText();
}