<?php

    class Produto{

        //Atributos PRIVADOS = Somente a classe tem acesso
        private string $nome;
        private float $preco;

        //Construtor COM parâmetros
        public function __construct(string $nome, float $preco){
            $this->nome = $nome; 
            $this->preco = $preco; 
        }

        //Método GET de Consulta de Preço
        public function getNome(): string {
            return $this->nome;
        }

        //Método GET de Consulta de Preço
        public function getPreco(): float {
            return $this->preco;
        }

        //Método SET de Alteração de Preço
        public function setPreco(float $novoPreco): void {
            if ($novoPreco > 0){
                $this->preco = $novoPreco;
                echo "Novo preco alterado com sucesso!<br/>" . "<br/>";
            } else {
                echo "Erro: Preco inválido!<br/>" . "<br/>";
            }
        }

    }

?>