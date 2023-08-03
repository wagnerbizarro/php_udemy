<?php

 function teste() {
 	
	 $a = 0; //valor resetado a cada chamada de função
	 $a++;

	 echo "$a <br>";
 } 

teste();
teste();
teste();

 function testestatic() {
 	static $a = 0; //valor mantido entre chamadas de função
	$a++;

	echo "$a <br>";
 }

testestatic();
testestatic();
testestatic();
?>
