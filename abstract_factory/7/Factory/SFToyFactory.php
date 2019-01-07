<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 17:19
 */
namespace Factory;

use Entity\Maze\SFMazeToy;
use Entity\Puzzle\SFPuzzleToy;
use Interfaces\ToyFactory;

class SFToyFactory implements ToyFactory {
    private $location = "San Francisco";

    public function makeMaze() {
        return new SFMazeToy();
    }

    public function makePuzzle() {
        return new SFPuzzleToy();
    }
}