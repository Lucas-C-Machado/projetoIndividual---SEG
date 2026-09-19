<?php

    require_once 'Funcionario.php';

    class Gerente extends Funcionario {
        private string $setor;

        public function __construct(string $nome, string $cpf, float $salario, string $setor) {
            parent::__construct($nome, $cpf, $salario);
            $this->setor = $setor;
        }

        // Getter do atributo específico
        public function getSetor(): string {
            return $this->setor;
        }

        public function exibirDadosGerente(): void {
            $this->exibirDados();
            echo "Setor: {$this->setor}<br>";
        }
    }