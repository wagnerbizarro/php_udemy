<?php

/*

Herança

- A herança é o recurso da OOP que dá possíbilidade de uma classe
herdar métodos e propriedades de outra;

- A palavra resercada é extends;

- Exemplo: 

class Programador extends Pessoa {

}

*/

class Humano {

    public $idade = 29;

    public function falar() {
        echo "Olá Mundo! <br>";
    }

    private function gritar(){
        echo "PHP É MUITO BOM ! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalala";
    }


}

class Programador extends Humano {

    public function acessarFalarBaixinho() {
        $this->falarBaixinho();
    }

}

$ze = new Programador;

$ze->falar();

$ze->acessarGritar();

$ze->acessarFalarBaixinho();


?>

