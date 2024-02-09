<?php
/*
Métodos format e modify

- Os métodos format e modify são da classe DateTime e nos ajudam a manipular os dados nestes objetos;

- format => Formata a data;

- modify => Altera a data;
*/

//Data Atual

$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l . F . Y') . "<br>";

// data + 5 dias
$data->modify('+5 days');

echo $data->format('d/m/y') . "<br>";

$data->modify('+2 months');

echo $data->format('d/m/y') . "<br>";

$data->modify('-3 year');

echo $data->format('d/m/y') . "<br>";



?>