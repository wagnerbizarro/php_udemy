<?php

if(5 == "5") {
    echo "identico; 1<br>";
}

// op de identico
if(5 === "5") {
    echo "identico; 2<br>";
}

if(5 === 5) {
    echo "identico; 3<br>";
}

if(3 === "teste") {
    echo "identico; 4<br>";
}


$a = 4;
$b = 4;

if($a === $b) {
    echo "identico; 5<br>";
}