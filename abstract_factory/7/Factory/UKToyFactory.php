<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 17:21
 */
namespace Factory;

use Entity\Maze\UKMazeToy;
use Entity\Puzzle\UKPuzzleToy;
use Interfaces\ToyFactory;

class UKToyFactory implements ToyFactory {
    private $location = "United Kingdom";

    public function makeMaze() {
        return new UKMazeToy();
    }

    public function makePuzzle() {
        return new UKPuzzleToy();
    }
}