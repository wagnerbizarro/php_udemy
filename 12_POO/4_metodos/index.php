<?php

//Classe
class Pessoa {

    //Metodos
    function falar() {
        echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo "soma: ". $x+$y;
    }
}


//Objeto
$matheus = new Pessoa;

$matheus->falar();
$matheus ->somar(5, 10);