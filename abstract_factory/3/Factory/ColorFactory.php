<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:29
 */
namespace Factory;

use Entity\Color\Blue;
use Entity\Color\Green;
use Entity\Color\Red;
use Interfaces\AbstractFactory;

class ColorFactory extends AbstractFactory {
    public function getShape($shape_type) {
        return null;
    }

    public function getColor($color) {
        switch(strtolower($color)) {
            case 'red':
                return new Red();
            case 'green':
                return new Green();
            case 'blue':
                return new Blue();
            default:
                return null;
        }
    }
}