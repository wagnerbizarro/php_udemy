<?php

/*

Preenchimento de formulário

- Podemos preencher o formulário com dados que vieram da requisição;

- Isso acontece bastante em resultados de busca ou edições de registros;

- Podemos fazer uma checagem de se o dado foi enviado e recebido
para a página, e utilizar o echo para exibir no atributo value do input;

Exemplo:

<input type="text" value="<?php echo $nome; ?>">
*/

$usuario = [
    'nome' => 'Wagner',
    'idade' => 29,
    'profissao' => 'Programador'
];

if($usuario) {

    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>

        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>

        <div>
            <input type="text" name="profissao" placeholder="Digite sua profisao" value="<?= $profissao ?>">
        </div>

    </form>
</body>
</html>