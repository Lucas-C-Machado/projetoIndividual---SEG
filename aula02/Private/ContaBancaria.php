<?php

class ContaBancaria {
    private float $saldo = 100.0;

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
}