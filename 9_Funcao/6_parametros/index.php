<?php

function velocidademMaxima($vel) {
    echo "O carro atinge a velocidade máxima de $vel km/h<br>";
}

velocidademMaxima(200);
velocidademMaxima(300);
velocidademMaxima(400);

echo "Teste continuando <br>";

$velocidade = 125;

velocidademMaxima($velocidade);




// Mais Parâmetros

function descreverAnimal($nome, $raca) {
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Bob", "Vira Lata");
descreverAnimal("Shark", "Pastor Alemão");
?>