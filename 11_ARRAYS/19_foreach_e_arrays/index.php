<?php

$user = [
    'nome' => 'Wagner',
    'idade' => 34,
    'profisao' => 'Dev'
];

foreach($user as $carac => $value) {
    echo "$carac => $value <br>";
}

echo "<br>";

foreach($user as $value){
    echo "$value <br>";
}

?>