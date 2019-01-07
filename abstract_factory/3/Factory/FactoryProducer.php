<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:32
 */
namespace Factory;

class FactoryProducer {
    public static function getFactory($factory) {
        switch(strtolower($factory)) {
            case 'shape':
                return new ShapeFactory();
            case 'color':
                return new ColorFactory();
            default:
                return null;
        }
    }
}