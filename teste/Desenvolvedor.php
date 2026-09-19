<?php

    require_once 'Funcionario.php';

    class Desenvolvedor extends Funcionario {

        //ATRIBUTOS Especializados
        private string $linguagemPrincipal;

        public function __construct(string $nome, string $cpf, float $salario, string $linguagemPrincipal) {
            parent::__construct($nome, $cpf, $salario);
            $this->linguagemPrincipal = $linguagemPrincipal;
        }

        public function exibirDados():void {
            echo "=== PESSOAS CADASTRADAS ===" . "<br/>";
            echo "| Nome: " . $this->nome . "<br/>";
            echo "| CPF: " . $this->cpf . "<br/>";
            echo "| Salario: R$ " . $this->salario . "<br/>";
            echo "| Linguagem Principal: " . $this->linguagemPrincipal . "<br/>";
        }

    }