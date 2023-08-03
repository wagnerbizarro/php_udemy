<?php
 
 $x = 10;

 $y =& $x;

 echo "$x<br>";
 echo "$y<br>";

 echo "Alterando a referencia X<br>";
 $x = 15;
 echo "$x<br>";
 echo "$y<br>";
 
 
 echo "Alterando a referenciada Y<br>";
 $y = 20;
 echo "$x<br>";
 echo "$y<br>";
?>
