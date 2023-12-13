<?php

# Crie uma função chamada defineCorCarro;
# Onde há um parâmetro chamado cor, com valor default de vermelha;
# Retorne a cor do carro;
# imprima o retorno tanto com parâmetro default, como também definido a cor;


function defineCorCarro($cor = "vermelho") {
    
    echo "A cor do carro é: $cor<br>";


}

defineCorCarro();
defineCorCarro("Azul");

?>