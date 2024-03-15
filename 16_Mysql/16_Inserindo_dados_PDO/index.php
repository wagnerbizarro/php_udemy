<?php

/*
Inserindo dados com PDO

- Em PDO vamos utilizar uma abordagem parecida com o mysqli;

- Utilizaremos o método prepare para realizar a query com prepared
statements;

- Depois bindParam para estabelecer os valores dos parâmetros;

- Por fim execute fará a execução da query;

$stmt = $conn->prepare("INSERT INTO x(a,b) VALUES(?,?)");


*/


$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db,$user,$pass");

// ASSUNTO DA AULA
$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte monitor";
$descricao = "O suporte está novo e na caixa ainda";

$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();

?>