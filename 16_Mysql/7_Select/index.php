<?php

/*
Selecionando dados com mysqli

- Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL
puro e novamente o método query;

- A instrução para inserir dados é a SELECT;

- Vamos inserir o método query em uma variável, que é onde receberemos os resultados;

- Com o método fetch_assoc, transformamos os resultados em um array;

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);


//ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//UM RESULTADO
$item = $result->fetch_assoc();

print_r($item);

//TODOS OS RESULTADOS

$itens = $result->fetch_all();

print_r($itens);

?>