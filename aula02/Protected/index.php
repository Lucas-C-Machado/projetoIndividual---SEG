<?php

    require_once 'ContaCorrente.php';

    // Cria uma instância da classe filha
    $minhaConta = new ContaCorrente(1000.0);

    // Executa uma ação que altera o saldo interno via herança
    $minhaConta->cobrarTarifaMensal();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Protected PHP</title>
</head>
<body>
    <h1>Resumo da Conta Corrente</h1>
    <p>Saldo Atual: R$ <?php echo $minhaConta->getSaldo(); ?></p>
    <p>Saldo com Limite: R$ <?php echo $minhaConta->getSaldoComLimite(); ?></p>
    
    <?php
        // Acesso direto de fora da classe gera ERRO:
        // echo $minhaConta->saldo; // Fatal error: Cannot access protected property
    ?>
</body>
</html>