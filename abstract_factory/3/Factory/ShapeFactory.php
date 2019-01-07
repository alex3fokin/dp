<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:24
 */
namespace Factory;

use Entity\Shape\Circle;
use Entity\Shape\Rectangle;
use Entity\Shape\Square;
use Interfaces\AbstractFactory;

class ShapeFactory extends AbstractFactory {
    public function getShape($shape_type) {
        switch(strtolower($shape_type)) {
            case 'circle':
                return new Circle();
            case 'rectangle':
                return new Rectangle();
            case 'square':
                return new Square();
            default:
                return null;
        }
    }

    public function getColor($color) {
        return null;
    }
}