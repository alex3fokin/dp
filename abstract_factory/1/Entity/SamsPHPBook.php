<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 03.01.2019
 * Time: 09:52
 */
namespace Entity;

use Interfaces\AbstractPHPBook;

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    public function __construct() {
        mt_srand((double)microtime() * 10000000);
        $rand_num = mt_rand(0, 1);

        if($rand_num < 1) {
            $this->author = "George Schlossnagle";
            $this->title = "Advanced PHP Programming";
        } else {
            $this->author = "Christian Wenz";
            $this->title = "PHP PhraseBook";
        }
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}