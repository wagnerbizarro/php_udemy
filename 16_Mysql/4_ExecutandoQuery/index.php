<?php

/*

Executando uma query 

- Para executar uma query vamos usar o método query;

- Ele deve ser utilizado a partir do objeto que fez a conexão;

- Vamos receber um determinado retorno como resultado, que podem ser 
os dados, caso seja um SELECT, por exemplo;

- É importante ao fim de todas as queries fechar a conexão, com o método
close;

- Conexões abertas gastam recursos do servidor e prejudicam a aplicação;

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$sql = "SELECT * FROM itens";

$result =$conn->query($sql);

print_r($result);

$conn->close();


?>