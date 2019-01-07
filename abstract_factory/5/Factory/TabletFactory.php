<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:48
 */
namespace Factory;

use Entity\Tablet\TabletHeader;
use Entity\Tablet\TabletImage;
use Entity\Tablet\TabletText;
use Interfaces\AbstractFactory;

class TabletFactory implements AbstractFactory {
    public function createHeader()
    {
        $header = new TabletHeader();
        return $header->makeHeader();
    }

    public function createGraphic()
    {
        $image = new TabletImage();
        return $image->makeImage();
    }

    public function createText()
    {
        $text = new TabletText();
        return $text->makeText();
    }
}