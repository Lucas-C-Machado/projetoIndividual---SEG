<?php

    class Plano
    {
        private string $nome;
        private float $valorMensal;
        private int $duracaoMeses;
        private string $descricao;

        public function __construct(string $nome, float $valorMensal, int $duracaoMeses, string $descricao){
            $this->nome = $nome;
            $this->valorMensal = $valorMensal;
            $this->duracaoMeses = $duracaoMeses;
            $this->descricao = $descricao;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getValorMensal(): float {
            return $this->valorMensal;
        }

        public function getDuracaoMeses(): int {
            return $this->duracaoMeses;
        }

        public function getDescricao(): string {
            return $this->descricao;
        }

        // Método utilitário para calcular o valor total do contrato
        public function calcularValorTotal(): float {
            return $this->valorMensal * $this->duracaoMeses;
        }
    }

?>



