<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:13
 * https://www.tutorialspoint.com/design_pattern/abstract_factory_pattern.htm
 */
require_once '../../autoload.php';

$shape_factory = \Factory\FactoryProducer::getFactory('shape');

$shape_1 = $shape_factory->getShape('circle');

$shape_1->draw();

$shape_2 = $shape_factory->getShape('rectangle');

$shape_2->draw();

$shape_3 = $shape_factory->getShape('square');

$shape_3->draw();

$color_factory = \Factory\FactoryProducer::getFactory('color');

$color_1 = $color_factory->getColor('red');

$color_1->fill();

$color_2 = $color_factory->getColor('green');

$color_2->fill();

$color_3 = $color_factory->getColor('blue');

$color_3->fill();