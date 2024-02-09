<?php

/*

Função strtotime

- Recebe uma string como parâmetro, que é um texto sinalizando tempo;

- A função tenta interpretar e transformar em data;

- Veja um exemplo de utilização:

echo date('d/m/y', strtotime('+2 years')); // 2 anos a mais
*/

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dezdias = strtotime("10 days");

echo $dezdias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincodias);

echo $dataAtualMais5 . "<br>";

$doismeses = strtotime("2 months");

echo $doismeses . "<br>";

$dataAtualMais2meses = date('d/m/y', $doismeses);

echo $dataAtualMais2meses;


$dozeanos = strtotime("12 years");

echo date('d/m/Y', $dozeanos);

?>