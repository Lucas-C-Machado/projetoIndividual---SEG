<?php

    class Pedido {

        //Estes são ATRIBUTOS da classe Pedido      
        public int $numeroPedido;
        public string $itemPedido;
        public int $quantidade;
        public string $formaPgto;
        public string $endereco;
        public string $status;
        public float $valor;

        //MÉTODOS da classe Pedido
        public function situacaoPedido(string $novoStatus):void {
            $this->status = $novoStatus;
        }

        public function comerPedido():void {
            echo "Comi o meu pedido!";
        }

        public function pagarPedido():void {
            echo "<br/>" . "O pedido " . $this->itemPedido . " está pago!";
        }

        public function desconto():void {
            $this->valor -= 10;
            echo "<br/>" . "Seu pedido teve um desconto de R$ " . $this->valor;
        }

        public function exibirStatus():void {
            echo "--------------------------------------";
            echo "<br/>" . "| Numero pedido: " . $this->numeroPedido . " |";
            echo "<br/>" . "| Item pedido: " . $this->itemPedido . " |";
            echo "<br/>" . "| Quantidade: " . $this->quantidade . " |";
            echo "<br/>" . "| Forma de pagamento: " . $this->formaPgto . " |";
            echo "<br/>" . "| Endereço: " . $this->endereco . " |";
            echo "<br/>" . "| Status: " . $this->status . " |";
            echo "<br/>" . "| Valor total = R$ " . $this->valor . " |";
            echo "<br/>" . "--------------------------------------" . "<br/>";
        }

    }

?>