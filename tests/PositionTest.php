<?php

namespace tests;

include '../MissionToMars/src/Position.php';

use PHPUnit\Framework\TestCase;
use src\Position;

class PositionTest extends TestCase {

    // test rotation à gauche
    public function testRotateLeft() {
        $position = Position::__construct_with_three_args(1, 2, 'W');
        $position->rotateLeft();
        $this->assertEquals($position->direction, 'S');
    }

    // test rotation à droite
    public function testRotateRight() {
        $position = Position::__construct_with_three_args(1, 2, 'N');
        $position->rotateRight();
        $this->assertEquals($position->direction, 'E');
    }

    // test avancement vers le Nord
    public function testForwardN() {
        $position = Position::__construct_with_three_args(1, 2, 'N');
        $position->forward();
        $this->assertEquals($position->x, 1);
        $this->assertEquals($position->y, 3);
        $this->assertEquals($position->direction, 'N');
    }

    // test avancement vers le Sud
    public function testForwardS() {
        $position = Position::__construct_with_three_args(1, 2, 'S');
        $position->forward();
        $this->assertEquals($position->x, 1);
        $this->assertEquals($position->y, 1);
        $this->assertEquals($position->direction, 'S');
    }

    // test avancement vers le l'Est
    public function testForwardE() {
        $position = Position::__construct_with_three_args(1, 2, 'E');
        $position->forward();
        $this->assertEquals($position->x, 2);
        $this->assertEquals($position->y, 2);
        $this->assertEquals($position->direction, 'E');
    }

    // test avancement vers l'Ouest
    public function testForwardW() {
        $position = Position::__construct_with_three_args(1, 2, 'W');
        $position->forward();
        $this->assertEquals($position->x, 0);
        $this->assertEquals($position->y, 2);
        $this->assertEquals($position->direction, 'W');
    }

    // test reculement vers le Nord
    public function testBackwardN() {
        $position = Position::__construct_with_three_args(3, 5, 'N');
        $position->backward();
        $this->assertEquals($position->x, 3);
        $this->assertEquals($position->y, 4);
        $this->assertEquals($position->direction, 'N');
    }

    // test reculement vers le Sud
    public function testBackwardS() {
        $position = Position::__construct_with_three_args(3, 5, 'S');
        $position->backward();
        $this->assertEquals($position->x, 3);
        $this->assertEquals($position->y, 6);
        $this->assertEquals($position->direction, 'S');
    }

    // test reculement vers l'Est
    public function testBackwardE() {
        $position = Position::__construct_with_three_args(6, 9, 'E');
        $position->backward();
        $this->assertEquals($position->x, 5);
        $this->assertEquals($position->y, 9);
        $this->assertEquals($position->direction, 'E');
    }

    // test reculement vers l'Ouset
    public function testBackwardW() {
        $position = Position::__construct_with_three_args(8, 7, 'W');
        $position->backward();
        $this->assertEquals($position->x, 9);
        $this->assertEquals($position->y, 7);
        $this->assertEquals($position->direction, 'W');
    }

    // test déplacement
    public function testMovement() {
        $positionA = Position::__construct_with_three_args(0, 0, 'N');
        $positionA->movement("RFFFFLFFFF");
        $this->assertEquals($positionA->x, 4);
        $this->assertEquals($positionA->y, 4);
        $this->assertEquals($positionA->direction, 'N');
        $positionB = Position::__construct_with_three_args(4, 4, 'N');
        $positionB->movement("LFFL");
        $this->assertEquals($positionB->x, 2);
        $this->assertEquals($positionB->y, 4);
        $this->assertEquals($positionB->direction, 'S');
    }

}