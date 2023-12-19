<?php

/* 

Crie uma função que recebe caracteristicas de algum objeto como
argumento (carro, sofá, cafeteira), em array associativo;

O array deve conter nome => preco;

Retorne apenas os itens que custam mais que R$ 10

Imprima o retorno


*/

$arr = [
    'porta' => 100,
    'macaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function itensCaros($arr) {
    $arrItensCaros = [];

    foreach($arr as $item => $preco) {
        if($preco > 10) {
            array_push($arrItensCaros, $item);
        }
    }

    return $arrItensCaros;
}


$novoArr = itensCaros($arr);

print_r($novoArr);


?>