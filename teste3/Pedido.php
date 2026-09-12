<?php

    require_once 'ItemPedido.php';

    class Pedido 
    {
        private array $itens = [];

        public function adicionarItem(string $produto, int $quantidade): void 
        {
            // O Pedido gerencia o ciclo de vida do ItemPedido (Composição)
            $this->itens[] = new ItemPedido($produto, $quantidade);
        }
    }
?>


