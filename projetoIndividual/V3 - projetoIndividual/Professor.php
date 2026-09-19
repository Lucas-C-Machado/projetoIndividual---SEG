<?php

    class Professor {
        private string $nome;
        private string $cpf;
        private string $email;
        private string $especialidade;

        public function __construct(string $nome, string $cpf, string $email, string $especialidade) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->especialidade = $especialidade;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getEspecialidade(): string {
            return $this->especialidade;
        }

        public function exibirDados(): void {
            echo "Professor: " . $this->nome . "<br>";
            echo "Especialidade: " . $this->especialidade . "<br>";
        }
    }