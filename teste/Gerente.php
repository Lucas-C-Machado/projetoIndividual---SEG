<?php

    require_once 'Funcionario.php';

    class Gerente extends Funcionario {

        //ATRIBUTOS Especializados
        private string $setor;

        public function __construct(string $nome, string $cpf, float $salario, string $setor) {
            parent::__construct($nome, $cpf, $salario);
            $this->setor = $setor;
        }

        public function exibirDados():void {
            echo "=== PESSOAS CADASTRADAS ===" . "<br/>";
            echo "| Nome: " . $this->nome . "<br/>";
            echo "| CPF: " . $this->cpf . "<br/>";
            echo "| Salario: R$ " . $this->salario . "<br/>";
            echo "| Setor: " . $this->setor . "<br/>";
        }

        public function getSetor(): string {
            return $this->setor;
        }

    }