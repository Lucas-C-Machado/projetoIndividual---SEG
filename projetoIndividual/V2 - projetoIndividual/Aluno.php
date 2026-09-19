<?php

    class Aluno{
        // ATRIBUTOS PROTEGIDOS
        private string $nome;
        private string $cpf;
        private string $email;
        private string $matricula;
        private bool $ativo;


        // ==============================
        // CONSTRUTOR
        // ==============================

        public function __construct(string $nome, string $cpf, string $email, string $matricula) {
            $this->setNome($nome);
            $this->cpf = $cpf;
            $this->setEmail($email);
            $this->matricula = $matricula;

            // Todo aluno começa ativo
            $this->ativo = true;
        }


        // ==============================
        // GETTERS
        // ==============================

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


        // ==============================
        // SETTERS
        // ==============================

        public function setNome(string $nome): void {
            if (!empty($nome)) {
                $this->nome = $nome;
            }
        }

        public function setEmail(string $email): void {
            if (!empty($email)) {
                $this->email = $email;
            }
        }


        // ==============================
        // COMPORTAMENTOS
        // ==============================

        public function ativar(): void {
            $this->ativo = true;
        }

        public function desativar(): void {
            $this->ativo = false;
        }

        public function exibirDados(): void {
            echo "=== DADOS DO ALUNO ===<br>";

            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "E-mail: " . $this->email . "<br>";
            echo "Matrícula: " . $this->matricula . "<br>";

            echo "Status: " .
                ($this->ativo ? "Ativo" : "Inativo") . "<br>";
        }
    }