<?php

    require_once 'Cachorro.php';
    require_once 'Gato.php';

    // Criando uma lista de animais (Demonstração de Polimorfismo)
    $animais = [
        new Cachorro("Rex", 4, "Pastor Alemão"),
        new Gato("Felix", 2, "Preto"),
        new Cachorro("Thor", 1, "Poodle"),
        new Gato("Mimi", 3, "Branco"),
        new Animal("Bicho Genérico", 5) // Exemplo usando a própria classe base
    ];

    echo "<h3>Emissão de Sons dos Animais:</h3>";

    // Percorrendo a lista de animais e chamando emitirSom() em cada um
    foreach ($animais as $animal) {
        $animal->emitirSom();
    }