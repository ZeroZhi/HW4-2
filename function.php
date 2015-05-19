<?php

function factorial($x) 
 {
    if ($x==1) 
 {
	return $x; 
 }
    else 
 {
    return $x * factorial($x-1);  
 } 
    return $x;
 }


function treugolnik($a,$h)
 {
   $s = 0.5*$a*$h;
   return $s;
 }


function priamougolnik($a,$b)
 {
   $s = $a*$b;
   return $s;
 }


function krug($r)
 {
   $pi = 3.141592;
   $s = $pi* ($r*$r);
   return $s;
 }

function summa_slov($summa)
 {
    $z = str_word_count($summa);
    $summa = $z;
    return $summa;
 }
