<?php

# Crie uma função que verifica se um número é par ou ímpar;
# Se for par imprima uma mensagem
# Se for ímpar imprima uma mensagem

use function PHPSTORM_META\type;

function typeNumber($number){
    $type = $number % 2;

    if($type == 0) {
        echo "$number é par<br>";
    }
    else {
        echo "$number é ímpar<br>";
    }
}

typeNumber(2);
typeNumber(10);
typeNumber(5);
typeNumber(7);

?>