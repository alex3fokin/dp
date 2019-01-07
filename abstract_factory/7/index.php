<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 17:17
 * Mastering PHP Design Patterns Book
 */
require_once '../../autoload.php';

$san_francisco_toy_factory = new \Factory\SFToyFactory();
$british_toy_factory = new \Factory\UKToyFactory();

echo "<pre>";
var_dump($san_francisco_toy_factory->makeMaze());
echo "<br>";

echo "<pre>";
var_dump($san_francisco_toy_factory->makePuzzle());
echo "<br>";

echo "<pre>";
var_dump($british_toy_factory->makeMaze());
echo "<br>";

echo "<pre>";
var_dump($british_toy_factory->makePuzzle());
echo "<br>";
