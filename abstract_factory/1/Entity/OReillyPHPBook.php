<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:52
 */

namespace Entity;

use Interfaces\AbstractPHPBook;

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    private static $oddOrEven = 'odd';

    public function __construct()
    {
        if(self::$oddOrEven === 'odd') {
            $this->author = "Rasmus Lerdorf and Kevin Tatroe";
            $this->title = "Programming PHP";
            self::$oddOrEven = 'even';
        } else {
            $this->author = "David Sclar and Adam Trachtenberg";
            $this->title = "PHP Cookbook";
            self::$oddOrEven = 'odd';
        }
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}