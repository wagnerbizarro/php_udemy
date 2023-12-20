<?php

/*

A função printf tem a funcionalidade semelhante a print;

Porém podemos imprimir valores de forma dinâmica utilizando o símbolo %;

Exemplo:

printf("Numero %d", 1);


%s -> String

%d -> int

%f -> float
*/

$nome = "Wagner";
$n = 10;

printf("O nome é %s <br>", $nome);

printf("O número é %d e o outro é %d <br>", $n, 150);

printf("A temperatura atual é %.2f <br>", 12.58);

?>