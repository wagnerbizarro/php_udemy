<?php

$a = 1;
$b = "1";
$c = 1;

if($a != $b) {
    echo "Diferente; 1<br>";
}

if($a !== $b) {
    echo "Diferente; 2<br>";
}

if($a !== 2) {
    echo "Diferente; 3<br>";
}

if([] !== $b) {
    echo "Diferente; 4<br>";
}