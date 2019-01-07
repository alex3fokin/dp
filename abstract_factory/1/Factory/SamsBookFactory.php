<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:48
 */
namespace Factory;

use Entity\SamsMySQLBook;
use Entity\SamsPHPBook;
use Interfaces\AbstractBookFactory;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";

    public function makePHPBook() {
        return new SamsPHPBook;
    }

    public function makeMySQLBook() {
        return new SamsMySQLBook;
    }
}