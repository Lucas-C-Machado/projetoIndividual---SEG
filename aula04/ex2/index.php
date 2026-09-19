<?php

    require_once 'Livro.php';
    require_once 'Eletronico.php';

    // Instanciando os objetos
    $livro = new Livro("O Hobbit", 59.90, "J.R.R. Tolkien");
    $eletronico = new Eletronico("Smartphone Galaxy", 1800.00, 12);

    echo "<h3>Detalhes do Livro:</h3>";
    $livro->exibirDetalhes(); // Executa a versão sobrescrita do Livro

    echo "<hr>";

    echo "<h3>Detalhes do Eletrônico:</h3>";
    $eletronico->exibirDetalhes(); // Executa a versão sobrescrita do Eletrônico