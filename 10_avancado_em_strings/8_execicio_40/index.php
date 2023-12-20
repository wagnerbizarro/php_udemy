<?php

/*

Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;

Imprima o número de letras "a" desta string;

*/


$frase = "O rato roeu a roupa do Rei de Roma"; // 4 letras a

$contadorDeAs = 0;

for($i = 0; $i < strlen($frase); $i++) {

    if($frase[$i] === "a") {
        $contadorDeAs++;
    }
}

echo "O número de a's na frase é de : $contadorDeAs";


?>