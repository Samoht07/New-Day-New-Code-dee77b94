<?php

$input = $argv[1];

$geld = array(50, 20, 10, 5, 2, 1);

foreach ($geld as $value) {
    if ($input >= 1) {
        $rest = floor($input / $value);
        $input = $input - ($value * $rest);
        if ($rest != 0){
            echo $rest . " x " . $value . " Euro" . "\n";
        }
    }
}



