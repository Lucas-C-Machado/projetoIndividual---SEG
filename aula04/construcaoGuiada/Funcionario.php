<?php

    class Funcionario {
        protected string $nome;
        protected string $cpf;
        protected float $salario;

        public function __construct(string $nome, string $cpf, float $salario) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->salario = $salario;
        }

        // --- MÉTODOS GETTERS ADICIONADOS ---
        public function getNome(): string {
            return $this->nome;
        }

        public function getCpf(): string {
            return $this->cpf;
        }

        public function getSalario(): float {
            return $this->salario;
        }

        public function exibirDados(): void {
            echo "Nome: {$this->nome}<br>";
            echo "CPF: {$this->cpf}<br>";
            echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
        }
    }