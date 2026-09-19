<?php

    class Produto {
        protected string $nome;
        protected float $preco;

        public function __construct(string $nome, float $preco) {
            $this->nome = $nome;
            $this->preco = $preco;
        }

        // Getters
        public function getNome(): string {
            return $this->nome;
        }

        public function getPreco(): float {
            return $this->preco;
        }

        // Comportamento comum
        public function exibirDetalhes(): void {
            echo "Produto: {$this->nome}<br>";
            echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        }
    }