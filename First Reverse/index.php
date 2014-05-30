<?php

function FirstReverse($str) {
    $count = 0;
    $new_str = "";
    $chars = strlen($str);
    while($count < $chars){
        $new_str = $new_str.substr($str,-1-$count,1);
        $count++;
    }
    // code goes here
    $str = $new_str;
    return $str;

}

// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FirstReverse(fgets(fopen('php://stdin', 'r')));