<?php

class Funcionario {
    protected float $salario;

    public function __construct(float $salarioInicial) {
        $this->salario = $salarioInicial;
    }

    public function getSalario(): float {
        return $this->salario;
    }
}