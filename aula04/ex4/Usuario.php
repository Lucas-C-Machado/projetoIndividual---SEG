<?php

    class Usuario {
        protected string $nome;
        protected string $email;

        public function __construct(string $nome, string $email) {
            $this->nome = $nome;
            $this->email = $email;
        }

        // Getters
        public function getNome(): string {
            return $this->nome;
        }

        public function getEmail(): string {
            return $this->email;
        }

        // Método na classe pai
        public function exibirPerfil(): void {
            echo "Nome: {$this->nome}<br>";
            echo "E-mail: {$this->email}<br>";
        }
    }