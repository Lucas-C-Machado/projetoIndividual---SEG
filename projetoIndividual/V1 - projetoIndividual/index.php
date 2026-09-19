<?php

    class Aluno {
        // ATRIBUTOS
        public string $nome;
        public string $cpf;
        public string $email;
        public string $matricula;
        public bool $ativo;

        // MÉTODO SEM PARÂMETRO
        public function ativar(): void {
            $this->ativo = true;
        }

        // MÉTODO SEM PARÂMETRO
        public function desativar(): void{
            $this->ativo = false;
        }

        // MÉTODO COM PARÂMETRO
        public function alterarEmail(string $novoEmail): void{
            $this->email = $novoEmail;
        }

        // MÉTODO SEM PARÂMETRO
        public function exibirDados(): void{
            echo "=== DADOS DO ALUNO ===<br>";

            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "E-mail: " . $this->email . "<br>";
            echo "Matrícula: " . $this->matricula . "<br>";

            echo "Status: " .
                ($this->ativo ? "Ativo" : "Inativo") . "<br>";
        }
    }