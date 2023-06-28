<?php

function mineDisemvowel($string) {
  
    $vowels = array('a','A','e','E','i','I','o','O','u','U');

    return str_replace($vowels,'',$string);

}

function bestDisemvowel($string) {
    return preg_replace("/[aeiou]/i", "", $string);
}

?>