<?php

/*
- As classes abstratas não podem ser instanciadas;

- Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente
 se uma classe herdar a abstrata;

- A palavra reservada tanto para classes como para métodos é abstract;

- Exemplo:
abstract class ClasseAbstrata {}

*/

abstract class Teste {

    public static function testandoClasse() {
        echo "Este método é de uma classe abstrata <br>";
    }


abstract public function testeAbs();

}

// $t = new Teste;

Teste::testandoClasse();


class Nova extends Teste {

    public function testeAbs() {
        echo "Teste método abstrato <br>";
    }
}


$n = new Nova;
$n->testeAbs();