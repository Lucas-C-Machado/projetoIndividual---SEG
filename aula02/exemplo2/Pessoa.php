<?php

    class Pessoa {
        public string $nome; // Atributo

        public function apresentar(): void {
            // O $this diz: "pegue o $nome DESTE objeto específico"
            echo "Olá, meu nome é " . $this->nome . "\n";
        }
    }

?>