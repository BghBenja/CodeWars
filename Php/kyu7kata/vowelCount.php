<?php

function mineGetCount($str) {
    $vowelsCount = 0;
    $vowels = "aeiou";
    $chars = str_split($str);
    
    foreach ($chars as $char) {
      
      if (str_contains($vowels, $char)) {
        $vowelsCount++;
      }
      
    }
    
    return $vowelsCount;
}

function bestGetCount($str) {;
  
    return preg_match_all('/[aeiou]/i',$str,$matches);
}

?>