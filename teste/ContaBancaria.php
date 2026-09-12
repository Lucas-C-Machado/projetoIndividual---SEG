<?php

    class ContaBancaria {

        //Atributos da classe ContaBancaria
        public string $titular;
        public float $saldo;

        //Construtor COM parâmetros
        public function __construct(string $titular, float $saldo){
            $this->titular = $titular;
            $this->saldo = $saldo;
        }
                
    }

?>