<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:15
 */
namespace Entity\Shape;

use Interfaces\Shape;

class Rectangle implements Shape {
    public function draw() {
        echo "<br>Rectangle draw<br>";
    }
}