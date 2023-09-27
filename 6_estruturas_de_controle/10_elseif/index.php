<?php

$a = 10;
$b = 15;
$c = 20;
$d = 25;

if($a >= $b) {
    echo "Entrou no if <br>";
}
else if ($c == $d) {
    echo "Entrou no primeiro ifelse <br>";
}
else if ($b === $a) {
    echo "Entrou no segundo ifelse <br>";
}
else {
    echo "Entrou no else <br>";
}

