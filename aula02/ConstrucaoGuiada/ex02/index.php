<?php

    //Importação da classe Produto
    require_once 'Produto.php';

    $produto1 = new Produto("Celular", 1500.00);

    echo "=== PRODUTOS DA LOJA ===<br/>";
    echo "Produto: " . $produto1->getNome() . "<br/>";
    echo "Preço: " . $produto1->getPreco() . "<br/>";
    echo "========================<br/>" . "<br/>";

    //Simulação de erro
    //$produto->saldo = -200.00;

    //Simulação de erro do modo correto
    $produto1->setPreco(-200.00);

    echo "=== PRODUTOS DA LOJA ===<br/>";
    echo "Produto: " . $produto1->getNome() . "<br/>";
    echo "Preço: " . $produto1->getPreco() . "<br/>";
    echo "========================<br/>" . "<br/>";

    //Alterando o preco para R$ 1800.00
    $produto1->setPreco(1800.00);

    echo "=== PRODUTOS DA LOJA ===<br/>";
    echo "Produto: " . $produto1->getNome() . "<br/>";
    echo "Preço: " . $produto1->getPreco() . "<br/>";
    echo "========================<br/>" . "<br/>";

    /*
        1. O que aconteceu quando você tentou alterar o preço direto pelo atributo $produto1->preco?
        R = 

        2. Por que o uso do método setPreco() é mais seguro para a regra de negócio?
        R = 
    
    */

?>