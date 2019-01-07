<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:44
 */
namespace Entity\Tablet;

use Abstracts\HeaderProduct;

class TabletHeader extends HeaderProduct {
    public function makeHeader() {
        $this->content = '<h4 style="color:#0c0;font-family:Verdana, sans-serif;margin-left:5%;">Tablet Header</h4>';
        return $this->content;
    }
}