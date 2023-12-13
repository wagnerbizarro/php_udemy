<?php

# Crie uma função que recebe um número
# Retorne o valor deste número ao quadrado

function quadrado($num) {
    return $num ** 2;
}

$x = quadrado(10);
$y = quadrado(9);
echo $x . "<br>";
echo $y . "<br>";
?>