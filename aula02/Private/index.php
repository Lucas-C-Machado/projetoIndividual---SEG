<?php

// 1. Importa a classe do outro arquivo
require_once 'ContaBancaria.php';

// 2. Cria o objeto
$minhaConta = new ContaBancaria();

// 3. Executa as ações
$minhaConta->depositar(50.0);

// 4. Exibe o resultado na tela HTML/Web
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Conta</title>
</head>
<body>
    <h1>Bem-vindo ao Banco!</h1>
    <p>Seu saldo atual é: <strong>R$ <?php echo $minhaConta->getSaldo(); ?></strong></p>
</body>
</html>