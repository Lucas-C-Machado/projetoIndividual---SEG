<?php

    require_once 'Plano.php';

    class Aluno {
        private string $nome;
        private int $matricula;
        private Plano $plano; // Agora é um objeto da classe Plano!
        private bool $situacao;

        public function __construct(string $nome, int $matricula, Plano $plano, bool $situacao = true){
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->plano = $plano;
            $this->situacao = $situacao;
        }

        public function trocarPlano(Plano $novoPlano): void{
            $this->plano = $novoPlano;
        }

        public function exibirStatus(): void{
            $statusTexto = $this->situacao ? "Ativo" : "Inativo";

            echo "==== ALUNO CADASTRADO ====" . "<br/>";
            echo "|| Nome: " . $this->nome . "<br/>";
            echo "|| Matrícula: " . $this->matricula . "<br/>";
            echo "|| Situação: " . $statusTexto . "<br/>";
            echo "|| Plano: " . $this->plano->getNome() . "<br/>";
            echo "|| Descrição: " . $this->plano->getDescricao() . "<br/>";
            echo "|| Mensalidade: R$ " . number_format($this->plano->getValorMensal(), 2, ',', '.') . "<br/>";
            echo "|| Total Contrato (" . $this->plano->getDuracaoMeses() . " meses): R$ " . number_format($this->plano->calcularValorTotal(), 2, ',', '.') . "<br/>";
            echo "============================" . "<br/><br/>";
        }
    }

?>


