
<?php

 require "function.php";

  $string = file_get_contents('http://source-it.com.ua/teachers/'); 
  $string = strip_tags($string);
     $sub ='Татьяна Муращенко';
     $pos = mb_strpos($string, $sub);
     $cut = substr($string, $pos, 49092);
     $cut = trim ($cut);
   $znaki = array('.',',','(',')',';',':','+','"');
     $cut = str_replace($znaki,"",$cut);

 echo "Всего слов в док-те - " .summa_slov($cut)."<br>";
 
       $z = explode(' ', $cut);

 print_r(array_count_values($z));
 