<?php

function mineSpinWords(string $str): string {
    $words = explode(" ", $str);
    for ($i = 0; $i < count($words); $i++){
      if (strlen($words[$i]) >= 5){
        $words[$i] = strrev($words[$i]);
      }
    }
    return join(" ",$words);
}

function bestSpinWords(string $str): string {
    
    $boom = explode(' ', $str);
    
    foreach ($boom as &$word) {
      if (strlen($word) >= 5) {
        $word = strrev($word);
      }
    }
    
    return implode(' ', $boom);
  }

?>