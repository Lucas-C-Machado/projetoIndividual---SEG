<?php

    class ContaBancaria {

        //ATRIBUTOS
        public string $nome;
        public float $saldo;

        //MÉTODOS
        //Método com parâmetro
        public function fazerDeposito(float $deposito):void {
            $this->saldo += $deposito;  
            echo "Você realizou um deposito de R$ " . $deposito . "<br/>";
        }

        //Método com parâmetro
        public function fazerSaque(int $saque):void {
            $this->saldo -= $saque;
            echo "Você realizou um saque de R$ " . $saque . "<br/>";
        }

        //Método SEM parâmetro
        public function saldoAtual():void {
            echo "Seu saldo atual é de R$ " . $this->saldo . "<br/>";
        }

        //Método SEM parâmetro
        public function exibirConta():void {
            echo "=== STATUS DA CONTA ===" . "<br/>";
            echo "|| Nome: " . $this->nome . " ||" . "<br/>";
            echo "|| Saldo: " . $this->saldo . " ||" . "<br/>";
            echo "=======================" . "<br/>";
        }

    }

?>