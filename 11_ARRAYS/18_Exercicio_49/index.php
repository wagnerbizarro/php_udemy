<?php

/*
- Crie variáveis com características de algum objeto ou animal
- Depois crie um array com compact com estas mesmas variáveis;
- Faça um loop no array e imprima os valores;
*/


$raca = "Vira lata";
$nome = "Turca";
$idade = 3;
$cor = "Preta";

$turca = compact("raca", "nome", "idade", "cor");

print_r($turca);
echo "<br>";

foreach($turca as $caracteristica => $value) {

    echo "$caracteristica: $value <br>";
}


?>