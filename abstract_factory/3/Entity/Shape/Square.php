<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:16
 */
namespace Entity\Shape;

use Interfaces\Shape;

class Square implements Shape {
    public function draw() {
        echo "<br>Square draw<br>";
    }
}