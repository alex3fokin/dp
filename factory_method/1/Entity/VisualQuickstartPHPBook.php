<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 09.01.2019
 * Time: 13:46
 */
namespace Entity;

use Abstracts\AbstractPHPBook;

class VisualQuickstartPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    public function __construct()
    {
        $this->author = "Larry Ullman";
        $this->title = "PHP for the World Wide Web";
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