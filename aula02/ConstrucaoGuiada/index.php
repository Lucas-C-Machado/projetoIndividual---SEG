<?php

    require_once 'ContaBancaria.php';

    // 1. Criando o Objeto (Instanciação)
    $minhaConta = new ContaBancaria();

    // 2. Definindo os dados iniciais
    $minhaConta->titular = "Carlos Silva";
    $minhaConta->saldo = 100.00; // Começa com R$ 100

    echo "=== CONTA BANCÁRIA DE: " . $minhaConta->titular . " ===" . " <br/>";

    // 3. Testando o Depósito (Adicionando R$ 50)
    $minhaConta->depositar(50.00);

    // 4. Testando o Saque (Retirando R$ 30)
    $minhaConta->sacar(30.00);

    // 5. Usando o Método COM Retorno para capturar o saldo final
    $saldoAtual = $minhaConta->consultarSaldo();

    echo "Saldo Final: R$ " . $saldoAtual . "\n";
    // Resultado esperado no terminal: Saldo Final: R$ 120

?>