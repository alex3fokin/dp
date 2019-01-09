<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 09.01.2019
 * Time: 13:34
 */
namespace Factory;

use Abstracts\AbstractFactoryMethod;
use Entity\OReillyPHPBook;
use Entity\SamsPHPBook;
use Entity\VisualQuickstartPHPBook;

class SamsFactoryMethod extends AbstractFactoryMethod {
    private $context = "Sams";

    public function makePHPBook($param)
    {
        $book = null;
        switch($param) {
            case "us":
                $book = new SamsPHPBook;
                break;
            case "other":
                $book = new OReillyPHPBook;
                break;
            case "otherother":
                $book = new VisualQuickstartPHPBook;
                break;
            default:
                $book = new SamsPHPBook;
        }

        return $book;
    }
}