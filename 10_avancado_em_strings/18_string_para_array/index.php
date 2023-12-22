<?php

/*

String para Array

Podemos converter uma string em array com a função explode;

Passamos primeiro o separador com argumento;

Depois a string que vai ser convertida;

*/

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);

echo "<br>";


$fraseB = "Carro, Avião, Barco, Navio";

$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);
echo "<br>";

?>