<?php

/*
Onde são salvas as sessions?

- As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação;

- O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;

- As sessions podem ser salvas em dois formatos: o pŕoprio do PHP e também o Web 
Distributed Data eXchange (WDDX)

*/

session_start();

//print_r($_SESSION);

$_SESSION['nome'] = "Wagner";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session!</h1>
</body>
</html>