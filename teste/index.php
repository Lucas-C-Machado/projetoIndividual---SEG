<?php

    //Importação do arquivo ContaBancaria.php
    require_once 'ContaBancaria.php';

    //Instanciação do objeto COM construtor
    $conta1 = new ContaBancaria("Maria", 1000.00);

    //Leitura dos dados
    echo "=== DADOS DA CONTA ===<br/>";
    echo "| Titular: " . $conta1->titular . "<br/>";
    echo "| Saldo: " . $conta1->saldo . "<br/>";
    echo "======================<br/>" . "<br/>";

    //Simulação do erro
    $conta1->saldo = -50000.00;

    //Leitura dos dados
    echo "=== DADOS DA CONTA ===<br/>";
    echo "| Titular: " . $conta1->titular . "<br/>";
    echo "| Saldo: " . $conta1->saldo . "<br/>";
    echo "======================<br/>" . "<br/>";

    /*
        1. O PHP impediu a alteração do saldo para um valor negativo?
        R = 

        2. Que tipo de problema esssa liberdade de acesso direto pode causar em um sistema real?
        R = 
    */

?>