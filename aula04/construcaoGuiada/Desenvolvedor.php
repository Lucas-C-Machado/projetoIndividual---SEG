<?php

    require_once 'Funcionario.php';

    class Desenvolvedor extends Funcionario {
        private string $linguagemPrincipal;

        public function __construct(string $nome, string $cpf, float $salario, string $linguagemPrincipal) {
            parent::__construct($nome, $cpf, $salario);
            $this->linguagemPrincipal = $linguagemPrincipal;
        }

        // Getter do atributo específico
        public function getLinguagemPrincipal(): string {
            return $this->linguagemPrincipal;
        }

        public function exibirDadosDesenvolvedor(): void {
            $this->exibirDados();
            echo "Linguagem Principal: {$this->linguagemPrincipal}<br>";
        }
    }