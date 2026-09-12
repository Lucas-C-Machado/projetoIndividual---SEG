<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario {
    public function aplicarBonus(): void {
        // Acesso direto permitido pois $salario é protected na classe Pai
        $this->salario += 500.00;
    }
}