<?php

$arr = range(1, 20);

//Array de 4 elementos
print_r(array_chunk($arr, 4));
echo "<br>";


//Imprimindo apenas o segundo array dos 4
$array_new = (array_chunk($arr, 4));
print_r($array_new[1]);
echo "<br>";
?>