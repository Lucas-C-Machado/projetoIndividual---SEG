<?php

    require_once 'Produto.php';

    class Eletronico extends Produto {
        private int $garantiaMeses;

        public function __construct(string $nome, float $preco, int $garantiaMeses) {
            // Chamada do construtor da classe pai
            parent::__construct($nome, $preco);
            $this->garantiaMeses = $garantiaMeses;
        }

        public function getGarantiaMeses(): int {
            return $this->garantiaMeses;
        }

        // Sobrescrita do comportamento para incluir o tempo de garantia
        public function exibirDetalhes(): void {
            parent::exibirDetalhes();
            echo "Garantia: {$this->garantiaMeses} meses<br>";
        }
    }