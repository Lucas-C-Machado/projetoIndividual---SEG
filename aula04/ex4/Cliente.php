<?php

    require_once 'Usuario.php';

    class Cliente extends Usuario {
        private int $pontosFidelidade;

        public function __construct(string $nome, string $email, int $pontosFidelidade) {
            // Reutiliza o construtor da classe pai
            parent::__construct($nome, $email);
            $this->pontosFidelidade = $pontosFidelidade;
        }

        public function getPontosFidelidade(): int {
            return $this->pontosFidelidade;
        }

        // Sobrescrita do método exibirPerfil()
        public function exibirPerfil(): void {
            parent::exibirPerfil();
            echo "Pontos de Fidelidade: {$this->pontosFidelidade}<br>";
        }
    }