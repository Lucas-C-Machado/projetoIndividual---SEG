<?php

    class Veiculo {
        protected string $marca;
        protected string $modelo;
        protected int $ano;

        public function __construct(string $marca, string $modelo, int $ano) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        // Getters
        public function getMarca(): string {
            return $this->marca;
        }

        public function getModelo(): string {
            return $this->modelo;
        }

        public function getAno(): int {
            return $this->ano;
        }

        // Método genérico
        public function exibirDados(): void {
            echo "Marca: {$this->marca}<br>";
            echo "Modelo: {$this->modelo}<br>";
            echo "Ano: {$this->ano}<br>";
        }
    }