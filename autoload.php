<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 10:11
 */
spl_autoload_register(function ($class) {
    $path = $class . ".php";

    if(file_exists($path)) {
        require_once $path;
    }
});