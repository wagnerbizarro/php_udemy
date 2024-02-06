<?php

/*
Visibilidade

- Temos três formatos de visibilidade: public, protected e private;

- public: A propriedade ou método pode ser acessada de qualquer forma;

- protected: A propriedade ou método pode ser acessada apenas pela
classe de origem ou as que recebem a mesma de herança;

-private: a propriedade ou método pode ser acessada apenas pela classe
que foi criada;

*/

class Car {
    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas;
    }

}

class Mecanico {
    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$matheus = new Mecanico;

$matheus->alterarRodas($carro);

echo $carro->rodas . "<br>";

// $matheus->colocarPelicula($carro, "G20");

//echo $carro->vidro . "<br>";

echo $carro->getVidro() . "<br>";

echo $carro->getPortas() . "<br>";

?>