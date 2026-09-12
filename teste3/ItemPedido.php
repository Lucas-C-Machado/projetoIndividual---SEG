<?php

    class ItemPedido 
    {
        private string $produto;
        private int $quantidade;

        public function __construct(string $produto, int $quantidade) 
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }
    }
?>



