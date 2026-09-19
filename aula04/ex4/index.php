<?php

    require_once 'Administrador.php';
    require_once 'Cliente.php';

    // Instanciando os objetos
    $admin = new Administrador("Lucas Machado", "admin@empresa.com", 1);
    $cliente = new Cliente("Maria Silva", "maria@email.com", 250);

    echo "<h3>Perfil do Administrador:</h3>";
    $admin->exibirPerfil();

    echo "<hr>";

    echo "<h3>Perfil do Cliente:</h3>";
    $cliente->exibirPerfil();