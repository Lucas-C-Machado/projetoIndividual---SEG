<?php

    class Animal {
        protected string $nome;
        protected int $idade;

        public function __construct(string $nome, int $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getIdade(): int {
            return $this->idade;
        }

        // Método na classe base
        public function emitirSom(): void {
            echo "{$this->nome}: Som genérico de animal<br>";
        }
    }