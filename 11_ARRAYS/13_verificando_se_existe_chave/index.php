<?php

$arr = [
    'nome' => 'Matheus',
    'idade' => 29
];

if(array_key_exists("nome", $arr)){
    echo "A chave existe! <br>";
} else {
    echo  "A chave não existe! <br>";
}



//outra forma, usando isset

if(isset($arr['nome'])){
    echo "A chave existe! ISSET<br>";
} else {
    echo  "A chave não existe! ISSET<br>";   
}
?>