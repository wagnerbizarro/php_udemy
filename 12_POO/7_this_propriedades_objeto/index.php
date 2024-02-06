<?php

/*
O $this se refere a instância atual do objeto;

Podendo assim alterar um valor de uma propriedade do objeto com :

%hits->propriedade = "x";

Podemos invocar um método do objeto com o this também;

*/

class Animal {

    public $nome;

    function escolherNome($nome) {
        $this->nome = $nome;
    }

    function latir() {
        return "Au au <br>";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }




}

$frida = new Animal;

echo "Sem nome ainda: $frida->nome <br>";

$frida->escolherNome("Frida");

echo "O nome do animal é: $frida->nome <br>";

echo $frida->latir();

echo $frida->latirForte();

?>