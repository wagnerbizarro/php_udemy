<?php

/*
Atualizando dados com prepared

- Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;

- Na hora de inserir o SET para atualizar os campos, vamos inserir os prepared statements;

- Sequência: prepare => bind_param => execute;

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);


// ASSUNTO DA AULA
$id = 11;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: " . $stmt->error;
}


?>