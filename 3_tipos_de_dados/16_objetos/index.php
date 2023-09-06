<?php

 //Classe do Objeto
 class Pessoa {

	 //Método do objeto
	 function falar() {
	  echo "Olá pessoal";
	 }
 }

 //Instancia de um objeto
 $Wagner = new Pessoa();

 //Atributo de um objeto
 $Wagner->nome = "Wagner";

 echo $Wagner->nome;
 
 echo "<br>";

 $Wagner->falar();

?>
