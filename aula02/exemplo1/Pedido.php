<?php

    class Pedido {

        // 1. ATRIBUTOS
        public int $numeroPedido;
        public string $nomeCliente;
        public string $item;
        public float $valorTotal;
        public string $status;

        // 2. MÉTODOS (Ações da classe)

        // Altera o status do pedido
        public function atualizarStatus(string $novoStatus): void {
            $this->status = $novoStatus;
        }

        // Exibe os dados do pedido formatados
        public function exibirStatus(): void {
            echo "----------------------------\n";
            echo "Número do Pedido: " . $this->numeroPedido . "\n";
            echo "Cliente: " . $this->nomeCliente . "\n";
            echo "Item: " . $this->item . "\n";
            echo "Valor Total: R$ " . $this->valorTotal . "\n";
            echo "Status: " . $this->status . "\n";
            echo "----------------------------\n";
        }
    }

?>