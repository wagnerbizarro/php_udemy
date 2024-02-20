<?php

print_r($_GET);

$nome = $_GET['nome'];
$idade = $_GET['idade'];

?>

<h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>