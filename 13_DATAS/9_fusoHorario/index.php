<?php
/*
Alterando o fuso horário

- O PHP por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;

- Porém podemos alterar manualmente o fuso com a função date_default_timezone_set;

- Esta função recebe como parâmetro o novo fuso horário em string;

*/

date_default_timezone_Set('America/Sao_Paulo');

$data = new DateTime();

print_r($data);
echo "<br>";


?>