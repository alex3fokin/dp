<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:43
 * https://designpatternsphp.readthedocs.io/en/latest/Creational/AbstractFactory/README.html
 */
require_once '../../autoload.php';

use Entity\CsvParser;
use Factory\ParserFactory;

$factory = new ParserFactory();
$parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

echo '<pre>';
var_dump($parser->parse(file('example.csv')));

$parser = $factory->createJsonParser();

var_dump($parser->parse('{"a":1,"b":2,"c":3,"d":4,"e":5}'));