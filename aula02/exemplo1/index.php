<?php

    // Importa a classe
    require_once 'Pedido.php';

    // 1. Instanciação do objeto (sem parâmetros no 'new')
    $pedido1 = new Pedido();

    // 2. Atribuição direta dos atributos
    $pedido1->numeroPedido = 1;
    $pedido1->nomeCliente = "Mesa 1";
    $pedido1->item = "X-Burguer";
    $pedido1->valorTotal = 25.00;
    $pedido1->status = "Em Preparação";

    // 3. Chamada dos métodos
    $pedido1->exibirStatus();

    // Atualizando o status através do método
    $pedido1->atualizarStatus("Pronto para Servir");

    // Exibindo novamente para ver a alteração
    $pedido1->exibirStatus();

?>