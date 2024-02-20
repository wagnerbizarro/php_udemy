<?php

/*
Parâmetro com mais de um valor

- Os inputs de checkbox podem conter mais de um valor;

- Para receber todos eles no backend precisamos adicionar uma 
sintexe de array no name;

- Assim receberemos todos os inputs marcados;

- Exemplo:

name="caracteristicas[]"
*/


if(isset($_POST['ingredientes'])) {

    $ingredientes = $_POST['ingredientes'];

    print_r($ingredientes);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Abobora"> Abobora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijao"> Feijao
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>


