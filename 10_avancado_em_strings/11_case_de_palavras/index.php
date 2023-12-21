<?php

/*

Alterando o case de palavras

Podemos alterar o case apenas das palavras com funções de PHP;

ucfirst - primeira letra da string em maiúscula.

ucwords - primeira letra de cada palavra em maiúscula

*/

$frase = "testando o case de uma palavra <br>";

// Primeira letra em maiúsculo
echo ucfirst($frase);

// Todas as palavras com as iniciais em maiúsculas
echo ucwords($frase);

?>