<?php

function Palindrome($string) {

    $string  = strtolower(preg_replace('/[^a-z]/i', '', $string));

    if($string == strrev($string)){
        return "true";
    }else {
        return "false";
    }

}

// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo Palindrome(fgets(fopen('php://stdin', 'r')));

