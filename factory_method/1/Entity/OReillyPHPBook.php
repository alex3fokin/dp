<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 09.01.2019
 * Time: 13:37
 */
namespace Entity;

use Abstracts\AbstractPHPBook;

class OReillyPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    private static $odd_or_even = "odd";

    public function __construct()
    {
        if(self::$odd_or_even === 'odd') {
            $this->author = "Rasmus Lerdorf and Kevin Tartoe";
            $this->title = "Programming PHP";
            self::$odd_or_even = 'even';
        } else {
            $this->author = "David Sklar and Adam Trachtenberg";
            $this->title = "PHP Cookbook";
            self::$odd_or_even = 'odd';
        }
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}