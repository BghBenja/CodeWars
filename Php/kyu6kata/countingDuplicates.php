<?php

function mineDuplicateCount($text) {
    $count = 0;
    $letters = array_count_values(str_split(strtolower($text)));
    foreach ($letters as $key=>$value)
    {
      if ($value > 1)
      {
        $count++;
      }
    }
    return $count;
}

function bestDuplicateCount($text) {

    $dupCount = 0;
    $text = array_count_values(str_split(strtolower($text)));

    foreach ($text as $val) {
    if ($val > 1) { $dupCount = $dupCount+1; }   
    }

    return $dupCount;
}

?>