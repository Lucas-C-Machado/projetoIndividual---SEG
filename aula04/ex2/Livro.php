<?php

    require_once 'Produto.php';

    class Livro extends Produto {
        private string $autor;

        public function __construct(string $nome, float $preco, string $autor) {
            // Chamada do construtor da classe pai
            parent::__construct($nome, $preco);
            $this->autor = $autor;
        }

        public function getAutor(): string {
            return $this->autor;
        }

        // Sobrescrita do comportamento para incluir o autor
        public function exibirDetalhes(): void {
            parent::exibirDetalhes();
            echo "Autor: {$this->autor}<br>";
        }
    }