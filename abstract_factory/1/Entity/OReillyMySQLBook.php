<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:51
 */
namespace Entity;

use Interfaces\AbstractMySQLBook;

class OReillyMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;

    public function __construct() {
        $this->author = "George Reese, Randy Jay Yarger, and Tim King";
        $this->title = "Managing and Using MySQL";
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}