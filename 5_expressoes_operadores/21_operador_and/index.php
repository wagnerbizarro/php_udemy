<?php

if(5 > 10 && 10 > 5) { //False e true
    echo "Entrou no if 1 <br>";
}

if(50 > 10 && 10 > 5) { //True e true
    echo "Entrou no if 2<br>";
}

if(50 > 10 && 10 > 500) { //True e false
    echo "Entrou no if 3<br>";
}

if(50 > 100 && 10 > 500) { //False e false
    echo "Entrou no if 4<br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d) {
    echo "Entrou no if 5 <br>";
}

if($a <= $a && $c >= $d) {
    echo "Entrou no if 6 <br>";
}

if($b == $a && $c > $d) {
    echo "Entrou no if 7 <br>";
}

if(($b <= $a && $c >= $d) && $a > $b) {
    echo "Entrou no if 8 <br>";
}