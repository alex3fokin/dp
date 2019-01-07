<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:31
 */
namespace Entity\Phone;

use Abstracts\ImageProduct;

class PhoneImage extends ImageProduct {
    public function makeImage() {
        $this->image = "<img src='https://lh3.googleusercontent.com/0XGJDan7mOOpCH9ez5v6uIVCJ-GdiiVcNVaE85nYaG76Vj8ztLB4H-RKDXrGd5ZCPr0=w170'>";
        return $this->image;
    }
}