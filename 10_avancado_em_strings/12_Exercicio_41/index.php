<?php

/*

Transforme a string "este item está em promoção"
Em "Este item está em PROMOÇÃO"
obs: você pode separar as strings, mas não pode escrever em caixa alta ou
baixa manualmente, só com funções;


*/

$str = "este item está em ";
$promo = "promoção";

echo  ucfirst($str) . strtoupper($promo);
?>