<?php

/*
- Para conectar ao MySQL com mysqli é muito simples, precisamos utilizar a função mysqli_connect;

- Passar os parâmetros de: host, usuário, senha e banco de dados;

- Com a conexão feita podemos utilizar as queries;

- Exemplo:
$conn = new mysqli("host", "user", "pass", "db");
*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);



?>