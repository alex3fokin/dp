<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:50
 */
namespace Entity;

use Interfaces\Parser;

class JsonParser implements Parser {
    public function parse($input) {
        return json_decode($input, true);
    }
}