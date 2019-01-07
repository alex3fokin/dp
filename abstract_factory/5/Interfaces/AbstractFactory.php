<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:22
 */
namespace Interfaces;

interface AbstractFactory {
    public function createHeader();
    public function createGraphic();
    public function createText();
}