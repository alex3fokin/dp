<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:31
 */
namespace Abstracts;

abstract class ImageProduct {
    protected $image;
    abstract public function makeImage();
}