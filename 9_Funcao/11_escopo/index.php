<?php

$a = 10;
$b = 15;

function testeEscopo(){

    $a = 5;
    echo "Escopo local de a: $a <br>";

    global $b;
    echo "Escopo global na função de b: $b <br>";

    static $c = 0;
    echo "Escopo static de c: $c <br>";

}

echo "Escopo global de a: $a <br>";


testeEscopo();
?>