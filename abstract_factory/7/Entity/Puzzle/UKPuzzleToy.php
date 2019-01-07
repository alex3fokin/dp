<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 17:40
 */
namespace Entity\Puzzle;

use Abstracts\PuzzleToy;

class UKPuzzleToy extends PuzzleToy {
    private $size;
    private $picture_name;

    public function __construct()
    {
        $rand = rand(1, 2);

        switch($rand) {
            case 1:
                $this->size = 3;
                break;
            case 2:
                $this->size = 9;
                break;
        }

        $this->picture_name = "London Puzzle";
    }

    public function getSize() {
        return $this->size;
    }

    public function getPictureName() {
        return $this->picture_name;
    }
}