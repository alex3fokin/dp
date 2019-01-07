<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 13:45
 */
namespace Entity;

use Interfaces\Parser;

class CsvParser implements Parser {
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_CONTAINS_NO_HEADER = false;

    private $skip_header_line;

    public function __construct($skip_header_line)
    {
        $this->skip_header_line = $skip_header_line;
    }

    public function parse($input) {
        $csv = array_map('str_getcsv', $input);

        return $csv;
    }
}