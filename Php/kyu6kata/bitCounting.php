<?php

function mineCountBits($n) 
{
  $bin = decbin($n);
  return preg_match_all('/([1])/', $bin);
}

function bestCountBits($n) 
{
  return substr_count(decbin($n), 1);
}

?>