<?php

/*
Verificando objetos

- Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;

- is_object() => verifica se uma variável é um objeto;

- get_class() => verifica a classe de um objeto;

- method_exists() => verifica se um método existe em um objeto;


*/

class Humano {

    public function falar() {
        echo "Olá";
    }
}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)) {
    echo "É um objeto <br>";
} 

echo get_class($matheus) . "<br>";

if(method_exists($matheus, "falar")) {
    echo "Método existe <br>";
}
?>