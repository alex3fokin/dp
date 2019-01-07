<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:22
 * http://www.php5dp.com/sandlight-cms-iii-php-abstract-factory/
 */
require_once '../../autoload.php';

function factoryTest(\Interfaces\AbstractFactory $factory) {
    echo $factory->createHeader();
    echo $factory->createGraphic();
    echo $factory->createText();
}

factoryTest(new \Factory\PhoneFactory());
factoryTest(new \Factory\TabletFactory());

