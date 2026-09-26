# Sistema de Gestão de Academia (SEG)

## 📋 Apresentação
Este projeto consiste em um sistema desenvolvido em **PHP** para o gerenciamento de uma academia (SEG). O software foi planejado para otimizar rotinas administrativas e operacionais, controlando o cadastro de frequentadores, corpo docente, planos de assinatura, fichas de treino, controle de exercícios e fluxo de pagamentos de forma integrada.

## 🎯 Situação-Problema / Objetivo
* **Situação-Problema:** Academias frequentemente enfrentam desafios no gerenciamento descentralizado de alunos, controle manual de mensalidades, fichas de treino desorganizadas e dificuldade no vínculo entre professores e alunos.
* **Objetivo:** Desenvolver uma aplicação orientada a objetos robusta e escalável capaz de centralizar todas as informações essenciais de uma academia em um único ambiente digital estruturado.

## ⚙️ Funcionalidades
* **Gerenciamento de Pessoas e Alunos:** Cadastro completo de usuários, diferenciando perfis de alunos e professores.
* **Controle de Planos e Matrículas:** Associação de alunos a planos de treino específicos e controle de status de matrícula.
* **Gestão de Treinos e Exercícios:** Criação e atribuição de rotinas de exercícios customizadas para os alunos[cite: 1].
* **Controle Financeiro (Pagamentos):** Registro e acompanhamento de pagamentos das mensalidades vinculadas aos planos[cite: 1].

## 💻 Tecnologias Utilizadas
* **Linguagem:** PHP[cite: 1] (com suporte a Programação Orientada a Objetos).
* **Estrutura de Dados/Arquivos:** Organização modular baseada em classes e arquivos de controle (`index.php`)[cite: 1].
* **Controle de Versão:** Git / GitHub.

## 🗂️ Organização do Projeto
A arquitetura do projeto está dividida em classes modulares que representam o domínio do problema[cite: 1]:
* `index.php`: Ponto de entrada e execução principal da aplicação[cite: 1].
* `Pessoa.php`: Classe base/abstrata para usuários do sistema[cite: 1].
* `Aluno.php`: Especialização para gerenciar dados específicos dos alunos[cite: 1].
* `Professor.php`: Especialização para gerenciar dados dos instrutores[cite: 1].
* `Plano.php`: Gerenciamento das modalidades de planos da academia[cite: 1].
* `Matricula.php`: Associação entre o aluno e o plano contratado[cite: 1].
* `Treino.php`: Estruturação das rotinas de treinamento[cite: 1].
* `Exercicio.php`: Cadastro de exercícios isolados aplicáveis aos treinos[cite: 1].
* `Pagamento.php`: Controle financeiro das transações[cite: 1].

## 🚀 Como Executar
1. Certifique-se de ter um ambiente de execução PHP configurado na sua máquina (como XAMPP, WampServer ou o servidor embutido do PHP).
2. Clone ou baixe este repositório para o diretório do seu servidor local (ex: `htdocs`).
3. Abra o terminal na pasta raiz do projeto (`V5 - projetoIndividual`)[cite: 1].
4. Inicie o servidor embutido do PHP executando:
   ```bash
   php -S localhost:8000
   ```

## 🧩 Conceitos de POO Utilizados
* **Herança:** A classe Pessoa.php serve como superclasse para estender atributos e métodos comuns às classes derivadas (Aluno.php e Professor.php)[cite: 1].
* **Encapsulamento:** Proteção dos dados internos das classes através de modificadores de visibilidade (private/protected) e uso de métodos getters e setters.
* **Modularização/Classes:** Separação clara de responsabilidades onde cada arquivo e classe representa uma entidade do mundo real do domínio da academia[cite: 1].

## 👥 Autores / Equipe
* **Desenvolvedor(a):** [Seu Nome Completo]
* **Instituição:** SEG[cite: 1]
* **Projeto:** Projeto Individual da disciplina/módulo

## 📌 Informações Relevantes da Versão Final
* **Versão:** 5.0 (V5 - Projeto Individual)[cite: 1]
* **Status:** Concluído / Pronto para avaliação acadêmica.
* **Observações:** O código foi estruturado priorizando as boas práticas de modelagem orientada a objetos solicitadas nas diretrizes do projeto.
