<?php

namespace src;

include 'Directions.php';

use src\Directions;

class Position {
    
    public $x;
    public $y;
    public $direction;

    public function __construct() {
        
    }

    static public function __construct_with_zero_arg() {
		$instance = new static();
		$instance->x = $instance->y = 0;
        $instance->direction = Directions::N;
		return $instance;
	}

	static public function __construct_with_three_args($x, $y, $direction) {
		$instance = new static();
		$instance->x = $x;
        $instance->y = $y;
        $instance->direction = $direction;
		return $instance;
	}

    public function rotateLeft() {
        switch ($this->direction) {
            case 'N':
                $this->direction = Directions::W;
                break;
            case 'S':
                $this->direction = Directions::E;
                break;
            case 'E':
                $this->direction = Directions::N;
                break;
            case 'W':
                $this->direction = Directions::S;
                break;
            default:
                break;
        }
    }

    public function rotateRight() {
        switch ($this->direction) {
            case 'N':
                $this->direction = Directions::E;
                break;
            case 'S':
                $this->direction = Directions::W;
                break;
            case 'E':
                $this->direction = Directions::S;
                break;
            case 'W':
                $this->direction = Directions::N;
                break;
            default:
                break;
        }
    }

    public function forward() {
        switch ($this->direction) {
            case 'N':
                $this->y += 1;
                break;
            case 'S':
                $this->y -= 1;
                break;
            case 'E':
                $this->x += 1;
                break;
            case 'W':
                $this->x -= 1;
                break;
            default:
                break;
        }
    }

    public function backward() {
        switch ($this->direction) {
            case 'N':
                $this->y -= 1;
                break;
            case 'S':
                $this->y += 1;
                break;
            case 'E':
                $this->x -= 1;
                break;
            case 'W':
                $this->x += 1;
                break;
            default:
                break;
        }
    }

    public function movement($moves) {
        $tMoves = str_split($moves);
        foreach ($tMoves as $move) {
            switch ($move) {
                case "F":
                    $this->forward();
                    break;
                case "B":
                    $this->backward();
                    break;
                case "L":
                    $this->rotateLeft();
                    break;
                case "R":
                    $this->rotateRight();
                    break;
                default:
                    print "There is an invalid character (" . $move . "). There is no price taken into account for the movement of the rover. \n";
                    break;
            }
            if ($this->x < 0 || $this->y < 0) {
                throw new \Exception("The x and y coordinates must be greater than or equal to 0. Your rovers are off the board.");
            }
        }
    }

    public function __toString() {
        return $this->x . " " . $this->y . " " . $this->direction . "\n";
    }

}