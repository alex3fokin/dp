<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:39
 */
namespace Factory;

use Entity\OReillyMySQLBook;
use Entity\OReillyPHPBook;
use Interfaces\AbstractBookFactory;

class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";

    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }

    public function makeMySQLBook()
    {
        return new OREillyMySQLBook;
    }
}