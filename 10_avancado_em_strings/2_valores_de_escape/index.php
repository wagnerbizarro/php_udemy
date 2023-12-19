<?php

/* Valores de Escape

Podemos utilizar alguns valores que executam funções especiais em strings;

Precisamos utilizar aspas duplas;

Exemplos: \n = nova linha;

\t = tab;

\\ = barra invertida;

\$ = sinal de dólar;

*/

header("Content-type: text/plain");

// pular linha
echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha \n";

// Tab
echo "Testando o tab \t aqui \n";

// Barra invertida 
echo "Barra invertida \\ \n";

// Dólar 
echo "Imprimindo o dólar \$teste";



?>
