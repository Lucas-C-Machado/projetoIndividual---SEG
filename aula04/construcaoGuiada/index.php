<?php

    require_once 'Gerente.php';
    require_once 'Desenvolvedor.php';

    // Instanciação
    $gerente = new Gerente("Lucas Machado", "123.456.789-00", 5500.00, "Tecnologia da Informação");
    $dev = new Desenvolvedor("Arthur", "987.654.321-11", 3800.00, "PHP");

    // 1. Dados comuns (veio da superclasse Funcionario)
    echo "<strong>Dados Comuns:</strong><br>";
    echo "Nome do Dev: " . $dev->getNome() . "<br>"; // Exemplo se existirem getters de nome
    echo "CPF do Gerente: " . $gerente->getCpf() . "<br><br>";

    // 2. Dados específicos (pertence à especialização)
    echo "<strong>Dados Específicos:</strong><br>";
    echo "Setor do Gerente: " . $gerente->getSetor() . "<br>";
    echo "Linguagem do Dev: " . $dev->getLinguagemPrincipal() . "<br><br>";

    // 3. Método herdado (definido na superclasse Funcionario)
    echo "<strong>Método Herdado:</strong><br>";
    $gerente->exibirDados(); // Executa o método da superclasse

    /*
        1. Qual deve ser a superclasse?

        R: A superclasse é Funcionario. Ela contém os atributos e comportamentos genéricos comuns a todos 
        os funcionários (nome, cpf, salario e o construtor/métodos base).

        2. Quais são as subclasses?

        R: As subclasses são Gerente e Desenvolvedor. Elas herdam de Funcionario (extends Funcionario) e 
        adicionam suas características e comportamentos específicos (setor para Gerente e linguagemPrincipal 
        para Desenvolvedor).
    */