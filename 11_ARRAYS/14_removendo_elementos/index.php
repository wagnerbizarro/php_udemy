<?php

// RESGATAR ELEMENTOS DE ARRAY

// REMOVER ELEMENTOS

$arr = [1, 2, 3, 4, 5, 6];
echo "ARRAY:";
print_r($arr);
echo "<br>";


//REMOVENDO 2 E 3

$removidos = array_splice($arr, 1, 2);
echo "ARRAY_Removido:";
print_r($arr);
echo "<br>";

echo "Elementos_Removidos:";
print_r($removidos);
echo "<br>";
?>