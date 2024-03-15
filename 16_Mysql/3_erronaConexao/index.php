<?php

/*

Chegando a conexão

- Para verificar se houve algum erro na conexão podemos utiliar a propriedade connect_errno;

- E para verificar o erro podemos utlizar o método connect_error();

- Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo, por exemplo;

*/


$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);


if($conn->connect_errno) {
    echo "Erro na conexão!<br>";
    
    echo "Erro:" . mysqli_connect_error();

    //Orientado a objeto
    echo "Erro:" . $conn->connect_error;
}


?>