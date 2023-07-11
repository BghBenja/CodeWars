<?php

function mineToJadenCase($string) 
{
  $result = '';
  $words = explode(" ", $string);
  for($i = 0; $i < count($words); $i++)
  {
    $words[$i] = ucfirst($words[$i]);
  }
  return join(" ", $words);
}

function bestToJadenCase($string) 
{
   return ucwords($string);
}

?>