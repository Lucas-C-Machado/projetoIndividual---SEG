<?php
    require_once 'Pedido.php';

    $pedido = new Pedido();
    $pedido->adicionarItem("Pizza de Calabresa", 1);

    // Adicione esta linha para testar a saída no navegador
    echo "Pedido criado com sucesso!";
?>



