<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:17
 */
namespace Entity\Shape;

use Interfaces\Shape;

class Circle implements Shape {
    public function draw() {
        echo "<br>Circle draw<br>";
    }
}