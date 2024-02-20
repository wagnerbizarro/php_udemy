<?php

/*

Explorando $_SERVER
- Como dito anteriormente $_SERVER tem diversas informações importantes;

* SERVER_SOFTWARE => Identificação do servidor;

* SERVER_NAME => Hostname, DNS ou IP do servidor;

* SERVER_PROTOCOL => Protocolo do servidor;

* SERVER_PORT => Porta do servidor;

* QUERY_STRING => argumentos após o ? na URL;
*/

print_r($_SERVER);

echo "<br>";

echo $_SERVER['MYSQL_HOME'] . "<br>";

if($_SERVER['SERVER_NAME'] == 'localhost') {

    echo "Está acessando o localhost <br>";
}
?>