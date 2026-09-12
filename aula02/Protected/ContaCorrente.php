<?php

    require_once 'Conta.php';

    class ContaCorrente extends Conta {
        private float $limite = 500.0;

        public function cobrarTarifaMensal(): void {
            // Funciona! Consegue alterar o $saldo diretamente por ser "protected" na classe Pai
            $this->saldo -= 15.00; 
        }

        public function getSaldoComLimite(): float {
            // Funciona! Consegue ler o $saldo diretamente
            return $this->saldo + $this->limite;
        }
    }

?>