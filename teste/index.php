<?php

    //Importação das classes
    require_once 'Desenvolvedor.php';
    require_once 'Funcionario.php';
    require_once 'Gerente.php';

    $desenvolvedor = new Desenvolvedor("Carlos", "987.654.321-00", 3000, "Java");
    $gerente = new Gerente("Bruno", "123.456.789-00", 4000, "Financeiro");
    
    $desenvolvedor->exibirDados();
    $gerente->exibirDados();
    
?>