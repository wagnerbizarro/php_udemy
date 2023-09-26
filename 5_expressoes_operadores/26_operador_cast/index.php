<?php

$a = (int) "12";

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if($a === 12) {
    echo "A é identico a 12 <br>";
}

$b = (float) "3.14843824";

if($b === 3.14843824) {
    echo "B é idêntico a 3.14 <br>";
}

$c = (string) 34;
echo $c;
echo "<br>";

if($c !== 34) {
    echo "C é diferente de int 34, ele é string<br>";
}
