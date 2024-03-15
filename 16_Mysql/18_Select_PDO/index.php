<?php

/*
Selecionando dados com PDO

- Para selecionar dados a abordagem também é parecida com o mysqli;

- Vamos seguir com a sequência: prepare=>bin_param=>execute

- Porém para o resgate dos dados temos dois métodos:

- fetch: recebe apenas a primeira ocorrência;

- fetchAll: recebe todos os dados;


*/


$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db,$user,$pass");

// ASSUNTO DA AULA

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

//Retornando um iten
$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

//Retornando vários itens
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);