<?php

    require_once 'Animal.php';

    class Gato extends Animal {
        private string $corPelagem;

        public function __construct(string $nome, int $idade, string $corPelagem) {
            parent::__construct($nome, $idade);
            $this->corPelagem = $corPelagem;
        }

        public function getCorPelagem(): string {
            return $this->corPelagem;
        }

        // Sobrescrita do método emitirSom()
        public function emitirSom(): void {
            echo "{$this->nome} (Gato): Miau!<br>";
        }
    }