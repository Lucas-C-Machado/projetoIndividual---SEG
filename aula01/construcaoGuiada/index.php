<?php

    //Importação da Classe - ContaBancaria.php
    require_once 'ContaBancaria.php';

    //Instanciação de um novo objeto
    $conta1 = new ContaBancaria();

    //Passagem de atributos ao objeto
    $conta1->nome = "Jaguaredos";
    $conta1->saldo = 30;

    $conta1->exibirConta();

    $conta1->fazerDeposito(100);

    $conta1->exibirConta();

    $conta1->fazerSaque(50);

    $conta1->exibirConta();

?>