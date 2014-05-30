<?php

Function FirstFactorial($num) {
    $r = $num;
    while($num > 1){
        $num--;
        $r = $r*$num;
    }
    return $r;
}

// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));