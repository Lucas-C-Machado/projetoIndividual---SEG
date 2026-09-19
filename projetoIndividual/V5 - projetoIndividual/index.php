<?php

    require_once 'classes/Pessoa.php';
    require_once 'classes/Aluno.php';
    require_once 'classes/Professor.php';
    require_once 'classes/Plano.php';
    require_once 'classes/Matricula.php';
    require_once 'classes/Exercicio.php';
    require_once 'classes/Treino.php';
    require_once 'classes/Pagamento.php';

    echo "<h1>Sistema de Academia - Versão Final</h1>";


    // ==============================
    // OBJETOS
    // ==============================
    $aluno1 = new Aluno("João Silva", "111.111.111-11", "joao@email.com", "ALU001");
    $aluno2 = new Aluno("Maria Oliveira", "222.222.222-22", "maria@email.com", "ALU002");

    $professor1 = new Professor("Carlos Santos", "333.333.333-33", "carlos@email.com", "Musculação", "CREF001");
    $professor2 = new Professor("Ana Costa", "444.444.444-44", "ana@email.com", "Treinamento Funcional","CREF002");

    // ==============================
    // POLIMORFISMO
    // ==============================
    echo "<h2>Pessoas da Academia</h2>";

    $pessoas = [$aluno1, $aluno2, $professor1, $professor2];

    foreach ($pessoas as $pessoa) {
        $pessoa->apresentar();
        echo "<br>";
    }