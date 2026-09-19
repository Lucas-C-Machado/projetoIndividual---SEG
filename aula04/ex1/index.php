<?php

    require_once 'Carro.php';
    require_once 'Moto.php';

    // Criando instâncias
    $carro = new Carro("Toyota", "Corolla", 2023, 4);
    $moto = new Moto("Honda", "CB 500F", 2022, 500);

    echo "<h3>Dados do Carro:</h3>";
    $carro->exibirDados(); // Executa o método sobrescrito na classe Carro

    echo "<hr>";

    echo "<h3>Dados da Moto:</h3>";
    $moto->exibirDados(); // Executa o método sobrescrito na classe Moto