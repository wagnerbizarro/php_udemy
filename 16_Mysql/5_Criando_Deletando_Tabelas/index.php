<?php

/*
Criando e deletando tabelas com mysqli

- Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL
puro, porém com o auxilio do método query;

- DROP TABLE para deletar tabelas;

- CREATE TABLE para cirar tabelas;

- Lmebre de fechar a conexão!

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$queryCreate = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$queryDelete = "DROP TABLE teste";

$conn->query($queryCreate);
$conn->close();

$conn->query($queryDelete);
$conn->close();

?>