<?php
 
 $pessoa = [
 	'nome' => 'João',
	'sexo' => 'masculino',
	'idade' => 30,
	'ativo' => true
 ];

 print_r($pessoa);
 echo "<br>";

 $PessoaNome = $pessoa['nome'];
 
 if($pessoa['idade'] >= 18) {
	 echo "$pessoanome é maior de idade";
	 
 }
 else
	 echo "$pessoanome é menor de idade";
?>
