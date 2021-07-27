<?php

namespace src;

include 'Position.php';

use src\Position;

function main($argv) {
    $position = Position::__construct_with_zero_arg();
    try {
        for($i = 1; $i < count($argv); $i++) {
            $position->movement($argv[$i]);
            print $position;
        }
    } catch(\Exception $e) {
        print 'Exception: ' . $e->getMessage() . "\n";
    }
}

main($argv);