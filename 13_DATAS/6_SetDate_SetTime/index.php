<?php
/*
Métodos SetData e setTime

- temos mais dois métodos interessantes em DateTime: setDate e setTime;

- setDate => Recebe ano, mês e dia, alterando completamente a data;

- setTime => Recebe hora, minuto e segundo, alterando o tempo da data;

*/

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1999, 12, 01);

print_r($data);
echo "<br>";

$data->setTime(05, 12, 10);

print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";

?>