<?php

function LongestWord($sen) {
    $len = 0;
    $longest = "";
    $words = explode(" ",$sen);

    foreach($words as $word){
        $cword = preg_replace('/[^a-z]/i', '', $word);
        if(strlen($cword)>$len){
            $longest = $cword;
            $len = strlen($cword);
        }
    }
    return $longest;
}

// keep this function call here
// to see how to enter arguments in PHP scroll down
echo LongestWord(fgets(fopen('php://stdin', 'r')));
//echo LongestWord("foo this");