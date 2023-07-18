<?php

function mineSolution($number){
    $count=0;
    
    for($i=0;$i<$number;$i++)
    {
      if($i % 3 == 0 or $i % 5 == 0) $count+=$i;
    }
    return $count;
}

function bestSolution($number) {
    $sum = 0;
    for ($i = 3; $i < $number; $i++) {
      if ($i % 3 === 0 || $i % 5 === 0) {
        $sum += $i;
      }
    }
    return $sum;
}

?>