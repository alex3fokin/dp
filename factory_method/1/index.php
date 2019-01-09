<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 09.01.2019
 * Time: 13:27
 * https://sourcemaking.com/design_patterns/factory_method/php/1
 */

use Factory\OReillyFactoryMethod;
use Factory\SamsFactoryMethod;

require_once '../../autoload.php';

function testFactoryMethod($factoryMethodInstance) {
    $phpUs = $factoryMethodInstance->makePHPBook("us");
    writeln('us php Author: '.$phpUs->getAuthor());
    writeln('us php Title: '.$phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("other");
    writeln('other php Author: '.$phpUs->getAuthor());
    writeln('other php Title: '.$phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("otherother");
    writeln('otherother php Author: '.$phpUs->getAuthor());
    writeln('otherother php Title: '.$phpUs->getTitle());
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

writeln('START TESTING FACTORY METHOD PATTERN');
writeln('');

writeln('testing OReillyFactoryMethod');
$factoryMethodInstance = new OReillyFactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('testing SamsFactoryMethod');
$factoryMethodInstance = new SamsFactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('END TESTING FACTORY METHOD PATTERN');
writeln('');