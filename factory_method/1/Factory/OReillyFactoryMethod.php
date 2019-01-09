<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 09.01.2019
 * Time: 13:31
 */
namespace Factory;

use Abstracts\AbstractFactoryMethod;
use Entity\OReillyPHPBook;
use Entity\SamsPHPBook;

class OReillyFactoryMethod extends AbstractFactoryMethod {
    private $context = "OReilly";

    public function makePHPBook($param)
    {
        $book = null;
        switch($param) {
            case "us":
                $book = new OReillyPHPBook;
                break;
            case "other":
                $book = new SamsPHPBook;
                break;
            default:
                $book = new OReillyPHPBook;
        }

        return $book;
    }
}