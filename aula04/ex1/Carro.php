<?php

    require_once 'Veiculo.php';

    class Carro extends Veiculo {
        private int $quantidadePortas;

        public function __construct(string $marca, string $modelo, int $ano, int $quantidadePortas) {
            parent::__construct($marca, $modelo, $ano);
            $this->quantidadePortas = $quantidadePortas;
        }

        public function getQuantidadePortas(): int {
            return $this->quantidadePortas;
        }

        // Sobrescrita do método exibirDados()
        public function exibirDados(): void {
            parent::exibirDados(); // Executa o código da classe pai
            echo "Quantidade de Portas: {$this->quantidadePortas}<br>";
        }
    }