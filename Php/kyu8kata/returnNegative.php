<?php

function mineMakeNegative($num) {
    if($num > 0){
      return -1 * $num; 
    }     
    return $num;
}

function bestMakeNegative($num){

  
    return -abs($num);

}

?>