<?php


/*

- Crie uma classe Humano com algumas propriedades e o método falar;

- Crie uma outra classe Professor que herda de humano, crie também as
propriedades e métodos particulares desta classe;

- Exiba os valores das propriedades da classe pai e também utilize os métodos.


*/

class Humano {

    protected $cerebro = true;
    public $nome;

    protected function falar($fala) {
        echo "$fala";
    }

}

class Professor extends Humano {

    private $ensinar = true;

    public function ProfesorFalar($fala) {
        $this->falar($fala);
    }

    public function cerebro() {
        echo $this->cerebro;
    }

}

$wagner = new Professor;
$wagner->nome = "Wagner";

echo $wagner->nome;
echo "<br>";
echo $wagner->cerebro();
echo "<br>";
$wagner->ProfesorFalar("Ola Turma!");


?>