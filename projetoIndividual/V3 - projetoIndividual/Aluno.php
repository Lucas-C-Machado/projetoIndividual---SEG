<?php

    class Aluno {
        private string $nome;
        private string $cpf;
        private string $email;
        private string $matricula;
        private bool $ativo;

        public function __construct(string $nome, string $cpf, string $email, string $matricula) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->matricula = $matricula;
            $this->ativo = true;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getCpf(): string {
            return $this->cpf;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function getMatricula(): string {
            return $this->matricula;
        }

        public function isAtivo(): bool {
            return $this->ativo;
        }

        public function desativar(): void {
            $this->ativo = false;
        }

        public function ativar(): void {
            $this->ativo = true;
        }

        public function exibirDados(): void {
            echo "Aluno: " . $this->nome . "<br>";
            echo "Matrícula: " . $this->matricula . "<br>";
            echo "Status: " .
                ($this->ativo ? "Ativo" : "Inativo") . "<br>";
        }
    }