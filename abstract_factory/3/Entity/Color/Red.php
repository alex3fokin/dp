<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:19
 */
namespace Entity\Color;

use Interfaces\Color;

class Red implements Color {
    public function fill() {
        echo "<br>Red fill<br>";
    }
}