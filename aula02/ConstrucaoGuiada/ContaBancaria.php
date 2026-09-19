<?php

    class ContaBancaria {

        // Declaração dos Atributos
        public string $titular;
        public float $saldo;

        // Método 1: Depositar dinheiro (Sem retorno)
        public function depositar(float $valor): void {
            $this->saldo = $this->saldo + $valor;
        }

        // Método 2: Sacar dinheiro (Sem retorno)
        public function sacar(float $valor): void {
            $this->saldo = $this->saldo - $valor;
        }

        // Método 3: Consultar Saldo (COM retorno)
        public function consultarSaldo(): float {
            return $this->saldo;
        }

    }

?>