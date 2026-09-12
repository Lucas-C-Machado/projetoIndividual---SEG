<?php

    class Conta {
        // Atributo protegido: acessível aqui e nas subclasses (filhas)
        protected float $saldo;

        public function __construct(float $saldoInicial) {
            $this->saldo = $saldoInicial;
        }

        public function getSaldo(): float {
            return $this->saldo;
        }
    }

?>