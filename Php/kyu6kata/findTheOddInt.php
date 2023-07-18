<?php

function mineFindIt(array $seq) : int
{
  $tmp = array_count_values($seq);
  foreach($seq as $num)
  {
    if($tmp[$num] % 2 != 0)
    {
      return $num;
    }
  }
}

function bestFindIt(array $seq) : int
{
    $nums = array_count_values($seq);
    foreach ($nums as $key => $val) {
      if ($val % 2) {
        return $key;
      }
    }
}

?>