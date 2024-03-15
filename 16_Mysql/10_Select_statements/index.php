<?php

/*
Selecionando dados com prepared

- Para selecionar dados com prepared statements devems resgatar os dados
com o método fetch_all;

- A sequência será: prepare => bind_param => execute => get_result => fetch_all;

- E depois devemos fechar a conexão;

*/


$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);


// ASSUNTO DA AULA
$id = 4;

$stmt  = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);


?>