<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:51
 */
namespace Factory;

use Entity\CsvParser;
use Entity\JsonParser;

class ParserFactory {
    public function createCsvParser($skip_header_line) {
        return new CsvParser($skip_header_line);
    }

    public function createJsonParser() {
        return new JsonParser();
    }
}