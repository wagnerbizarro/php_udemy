<?php

/*
Verificando classes
- Em PHP temos alguns métodos que nos ajudam a entender as classes;

- class_exists() => Verifica se uma classe existe;

- get_class_methods() => Verifica os métodos de uma classe;

- get_class_vars() => mapeamento das propriedades de  uma classe;

*/

class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar() {}

    public function andar() {}

}

print_r(get_class_vars("Humano"));
echo "<br>";

print_r(get_class_methods("Humano"));
echo "<br>";

if(class_exists("Humano")) {
    echo "A classe existe <br>";
}





?>