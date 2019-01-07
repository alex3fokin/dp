<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 17:38
 */
namespace Entity\Maze;

use Abstracts\MazeToy;

class UKMazeToy extends MazeToy {
    private $size;
    private $picture_name;

    public function __construct()
    {
        $this->size = 9;
        $this->picture_name = "London Maze";
    }

    public function getSize() {
        return $this->size;
    }

    public function getPictureName() {
        return $this->picture_name;
    }
}