<?php

    require_once 'Usuario.php';

    class Administrador extends Usuario {
        private int $nivelAcesso;

        public function __construct(string $nome, string $email, int $nivelAcesso) {
            // Reutiliza o construtor da classe pai
            parent::__construct($nome, $email);
            $this->nivelAcesso = $nivelAcesso;
        }

        public function getNivelAcesso(): int {
            return $this->nivelAcesso;
        }

        // Sobrescrita do método exibirPerfil()
        public function exibirPerfil(): void {
            parent::exibirPerfil();
            echo "Nível de Acesso: {$this->nivelAcesso}<br>";
        }
    }