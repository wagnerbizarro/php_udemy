<?php

//Escopo Global
 $teste = "abcd";
 
 if(true) {
  $teste = "fgh";
  echo "$teste if <br>";
 }

 echo "$teste global <br>";

 //Escopo Local
 function funcao() {
	 $teste = "www";
  	 echo "$teste local <br>";
 }

 funcao();

 function testandoGlobal() {
	 global $teste; //Chama a variavel global teste
	 echo "$teste global dentro da função<br>";
	 $teste = "alterada"; //Alterando a variavel do escopo global;
 }

 testandoGlobal();
?>
