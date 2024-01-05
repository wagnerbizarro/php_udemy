<?php

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

//Crescente
asort($arr);

print_r($arr);
echo "<br>";

//Decrescente
arsort($arr);

print_r($arr);
echo "<br>";

//Ordena pelas chaves
ksort($arr);

print_r($arr);
echo "<br>";


krsort($arr);

print_r($arr);
echo "<br>";
?>