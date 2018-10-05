<?php

defined('BASEPATH') or die;

function SetNameCorrect($string) 
{
  $hString = (ucfirst($string));
  return $hString;
}

function realPrice ($getal) 
{
  if ( $getal == null ) 
  {
    return null;
  } 
 else
 {
    $real = "&euro; ";
    $real .= number_format($getal, 2, ',', '.');
    return $real;
 } 
}

$cheeses = array('gouda', 'old', 'parasan');

array_push($cheeses, 'mozerella');

sort($cheeses);

print_r($cheeses);
