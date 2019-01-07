<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:28
 */
namespace Entity\Phone;

use Abstracts\HeaderProduct;

class PhoneHeader extends HeaderProduct {
    public function makeHeader() {
        $this->content = '<h4 style="color:#c00;font-family:Verdana, sans-serif;margin-left:5%;">Phone Header</h4>';
        return $this->content;
    }
}