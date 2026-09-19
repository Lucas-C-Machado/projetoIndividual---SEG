<?php

    require_once 'Animal.php';

    class Cachorro extends Animal {
        private string $raca;

        public function __construct(string $nome, int $idade, string $raca) {
            parent::__construct($nome, $idade);
            $this->raca = $raca;
        }

        public function getRaca(): string {
            return $this->raca;
        }

        // Sobrescrita do método emitirSom()
        public function emitirSom(): void {
            echo "{$this->nome} (Cachorro): Au Au!<br>";
        }
    }