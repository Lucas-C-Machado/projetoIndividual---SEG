<?php

    //Importação da classe Pedido.php
    require_once 'Pedido.php';

    //Instanciando um novo objeto/criando um novo objeto
    $pedido1 = new Pedido();

    $pedido1->numeroPedido = 1;
    $pedido1->itemPedido = 'Hamburguer';
    $pedido1->quantidade = 2;
    $pedido1->formaPgto = 'Débito';
    $pedido1->endereco = 'Rua teste 123';
    $pedido1->status = 'A caminho';
    $pedido1->valor = 30;

    $pedido1->exibirStatus();

    $pedido1->situacaoPedido("Cancelado!");

    $pedido1->exibirStatus();

    $pedido1->comerPedido();

    $pedido1->pagarPedido();

    $pedido1->desconto();

?>