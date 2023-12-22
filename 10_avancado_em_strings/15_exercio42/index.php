<?php

/*
Na frase "Cadê o meu queijo? Ele estava aqui em cima"
Resgate apenas a palavra queijo;
*/

$string = "cadê o meu queijo? Ele estava aqui em cima";

$queijo = substr($string, 12, 6);

echo $queijo;

?>