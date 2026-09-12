<?php

    require_once 'Gerente.php';

    $gerente = new Gerente(3000.00);

    // Passo 3: Tentativa de acesso direto de fora da hierarquia
    // echo $gerente->salario; // Uncaught Error: Cannot access protected property

    // Uso correto através de herança e getter
    $gerente->aplicarBonus();
    echo "Salário do Gerente com bônus: R$ " . $gerente->getSalario();

/*
Passo 4: Análise e Entrega

1. A classe Gerente conseguiu modificar o atributo $salario diretamente? Por quê?
   Sim. Porque Gerente é uma subclasse de Funcionario (usa "extends") e atributos "protected" são 
   visíveis e modificáveis dentro da própria classe e de suas subclasses.

2. O arquivo index.php conseguiu acessar o atributo $salario diretamente? Por quê?
   Não. O modificador "protected" impede o acesso externo (fora da estrutura da classe e de suas filhas), 
   funcionando similar ao "private" para contextos externos.
*/

?>