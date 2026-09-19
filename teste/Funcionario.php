<?php

    class Funcionario{

        //ATRIBUTOS GERAIS/GENERALIZADOS
        private string $nome;
        private string $cpf;
        private float $salario;

        //Construtor
        public function __construct(string $nome, string $cpf, float $salario){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->salario = $salario;
        }

        public function exibirDados():void {
            echo "=== PESSOAS CADASTRADAS ===" . "<br/>";
            echo "| Nome: " . $this->nome . "<br/>";
            echo "| CPF: " . $this->cpf . "<br/>";
            echo "| Salario: R$ " . $this->salario . "<br/>";
        }

        public function getNome(): string {
            return $this->nome;
        }
    
        public function getCpf(): string {
            return $this->cpf;
        }

        public function getSalario(): string {
            return $this->salario;
        }

    }