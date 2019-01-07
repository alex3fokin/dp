<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:21
 */
namespace Entity\Color;

use Interfaces\Color;

class Green implements Color {
    public function fill() {
        echo "<br>Green fill<br>";
    }
}