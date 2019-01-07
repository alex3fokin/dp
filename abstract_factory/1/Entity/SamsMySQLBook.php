<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:51
 */
namespace Entity;

use Interfaces\AbstractMySQLBook;

class SamsMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;

    public function __construct() {
        $this->author = "Paul Dubois";
        $this->title = "MySQL, 3rd Edition";
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}