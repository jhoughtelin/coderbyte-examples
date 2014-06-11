<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * palindrome.php
 *
 * PHP version 5.5.x
 *
 * @category  coderbyte-examples
 * @package   coderbyte-examples
 * @author    Josh Houghtelin <Josh@FindSomeHelp.com>
 * @since     2014/06/11
 * @link      http://gitphp.com
 */


function palindrome($string) {
    $string  = strtolower(preg_replace('/[^a-z]/i', '', $string));

    if($string == strrev($string)){
        return true;
    }else {
        return false;
    }
}


echo palindrome('1Racecar ! ');