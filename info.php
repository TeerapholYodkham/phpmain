<?php 
  $string1 = 1;
  $string2 = 1;
  
  $display = (isset($string1) && isset($string2) && $string1 == 1 && $string2 == 1) ? "display true" : "display false";
  
  echo "Display :".$display;
?>
