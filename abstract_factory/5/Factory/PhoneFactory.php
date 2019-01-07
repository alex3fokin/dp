<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:24
 */
namespace Factory;

use Entity\Phone\PhoneHeader;
use Entity\Phone\PhoneImage;
use Entity\Phone\PhoneText;
use Interfaces\AbstractFactory;

class PhoneFactory implements AbstractFactory {
    public function createHeader() {
        $header = new PhoneHeader();
        return $header->makeHeader();
    }

    public function createGraphic() {
        $image = new PhoneImage();
        return $image->makeImage();
    }

    public function createText() {
        $text = new PhoneText();
        return $text->makeText();
    }
}