<?php

# Crie uma função.
# Ela deve receber um parâmetro de nome e idade;
# imprima "Olá eu sou o NOME e tenho X anos"



function printUser($firstName, $age) {

    echo "Olá eu sou o $firstName e tenho $age <br>";

}

$userName = "Wagner";
$userAge = "34";

printUser($userName, $userAge);

?>