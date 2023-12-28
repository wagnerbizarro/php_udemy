<?php

/*

Array multidimensional

Quando inserimos arrays dentro de arrays formamos um array
multidimensional, também conhecido como matriz;

Para acessar este tipo de array também utilizamos índices, acessando o 
externo e depois os internos;

Ex: $arr[1][0] => Primeiro elemento do segundo array;


*/

$arr = [
    [1, 2, 3],
    [2, 4, 6]
];

print_r($arr);
echo "<br>";


echo $arr[0][1] . "<br>"; // acessando o primeiro array, e segundo elemento
echo $arr[1][2] . "<br>"; // acessando o segundo array, e o último elemento

echo count($arr) . "<br>"; // count para a matriz
echo count($arr[0]) . "<br>"; // count para o primeiro array da matriz

?>