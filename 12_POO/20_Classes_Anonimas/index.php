<?php

/*
Classes Anônimas

- As classes anônimas são criadas em uma variável e não possuem nome;

- Elas funcionam como qualquer outra classe;

- Precisamos fechar ela com ";"

- Exemplo:

$anonima = new class() {};
*/

$pessoa = new class() {

    public $nome = "Matheus";

    public function dizerNome() {
        echo "Olá meu nome é $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";
$pessoa->dizerNome();

?>