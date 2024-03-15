<?php

/*
Deletando dados com prepared

- Para deletar dados vamos seguir os mesmos passos de INSERT e SELECT;

- Na hora de inserir o WHERE para remover os registros, vamos inserir os prepared statements;

- Sequênci: prepare => bind_param => execute;

- Lembrando que DELETE se WHERE causa a remoção de todos os registros;

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);


// ASSUNTO DA AULA
$nome = "Teste";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();


?>