<?php

    //Importando a Classe (Pessoa.php)
    require_once 'Pessoa.php';

    // Criamos a Maria
    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Maria";

    // Criamos o João
    $pessoa2 = new Pessoa();
    $pessoa2->nome = "João";

    // Chamando os métodos:
    $pessoa1->apresentar(); // Imprime: Olá, meu nome é Maria
    $pessoa2->apresentar(); // Imprime: Olá, meu nome é João

?>