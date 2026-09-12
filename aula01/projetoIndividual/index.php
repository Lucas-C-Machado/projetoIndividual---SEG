<?php

    require_once 'Plano.php';
    require_once 'Aluno.php';

    // 1. Criando os Planos da Academia (Objetos independentes)
    $planoBasico = new Plano("Plano Básico", 89.90, 1, "Acesso à musculação em horário padrão.");

    $planoPremium = new Plano("Plano Premium VIP", 149.90, 12, "Acesso total 24h + Aulas coletivas + Armário exclusivo.");

    // 2. Instanciando os Alunos e vinculando aos Planos (Agregação)
    // Aluno 1 e Aluno 2 compartilham o MESMO objeto de plano ($planoPremium)
    $aluno1 = new Aluno("Ana Silva", 202601, $planoPremium, true);
    $aluno2 = new Aluno("Carlos Oliveira", 202602, $planoPremium, true);

    // Aluno 3 utiliza o $planoBasico
    $aluno3 = new Aluno("João Pereira", 202603, $planoBasico, false);

    // 3. Exibindo as informações no navegador
    $aluno1->exibirStatus();
    $aluno2->exibirStatus();
    $aluno3->exibirStatus();

?>
