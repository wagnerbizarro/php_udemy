<?php

# func_get_args = retorna os valores dos argumentos
# func_num_args = retorna a quantidade total de argumentos


function soma($a, $b, $c) {
    print_r(func_get_args());
    echo "<br>";

    echo func_num_args() . "<br>";
}

soma(2, 4, 5);
?>