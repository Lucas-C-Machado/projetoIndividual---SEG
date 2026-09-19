<?php

    require_once 'classes/Aluno.php';
    require_once 'classes/Professor.php';
    require_once 'classes/Plano.php';
    require_once 'classes/Matricula.php';
    require_once 'classes/Exercicio.php';
    require_once 'classes/Treino.php';

    echo "<h1>Sistema de Academia - Versão 3</h1>";


    // PLANOS
    $planoBasico = new Plano("Plano Básico", 89.90, 12);

    $planoPremium = new Plano("Plano Premium", 129.90, 12);


    // ALUNO
    $aluno1 = new Aluno("João Silva", "111.111.111-11", "joao@email.com", "ALU001");


    // PROFESSOR
    $professor1 = new Professor("Carlos Santos", "333.333.333-33", "carlos@email.com", "Musculação");


    // MATRÍCULA
    $matricula1 = new Matricula(1, $aluno1, $planoPremium,"12/09/2026");


    // EXERCÍCIOS
    $supino = new Exercicio("Supino Reto", 4, 10);

    $agachamento = new Exercicio("Agachamento", 4, 12);

    $remada = new Exercicio("Remada", 3, 12);


    // TREINO
    $treinoA = new Treino("Treino A", $professor1);

    $treinoA->adicionarExercicio($supino);
    $treinoA->adicionarExercicio($agachamento);
    $treinoA->adicionarExercicio($remada);


    // EXIBIÇÕES
    echo "<hr>";

    $aluno1->exibirDados();

    echo "<hr>";

    $planoPremium->exibirDados();

    echo "<hr>";

    $matricula1->exibirDados();

    echo "<hr>";

    $treinoA->exibirTreino();