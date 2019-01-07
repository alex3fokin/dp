<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:22
 */
namespace Entity\Color;

use Interfaces\Color;

class Blue implements Color {
    public function fill() {
        echo "<br>Blue fill<br>";
    }
}