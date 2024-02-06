<?php

/*
Construtores:

- Pelos construtores podemos inicializar objetos com valores de propriedades
únicos para cada objeto;

- Passamos como argumentos os valores das propriedades;

- Exemplo:

function __construct($portas, $motor, $teto_solar) {

}

*/

class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {
        
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Car(4, "Vermelha", "Ferrari");

echo "O carro é da marca $ferrari->marca, cor $ferrari->cor e tem $ferrari->portas portas <br>";
echo "\n";

$bmw = new Car(2, "Preto", "BMW");

echo "O carro é da marca $bmw->marca, cor $bmw->cor e tem $bmw->portas portas <br>";


?>