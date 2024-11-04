# Estrutura Básica de Desenvolvimento do Sistema de Gestão de Medicamentos

## 1. Contexto do Projeto (Escopo)

**Descrição do Produto**  
O sistema de gestão de medicamentos visa melhorar o controle e a organização de estoque de medicamentos em Unidades Básicas de Saúde (UBS). O principal problema a ser resolvido é a falta de um controle eficiente para garantir a rastreabilidade de medicamentos, gestão de estoque, validade dos produtos e documentação de retiradas baseadas em receitas.

**Escopo**  
O sistema permitirá o cadastro de medicamentos, fornecedores e categorias, além do controle de estoque e registro de retiradas. As principais funcionalidades incluem:
- **Cadastro de Medicamentos**: Registro com nome, descrição, quantidade, validade, categoria e fornecedor.
- **Controle de Estoque**: Controle da quantidade disponível e alertas para medicamentos próximos da validade ou com baixo estoque.
- **Registro de Retiradas**: Rastreabilidade de medicamentos com base em receitas médicas.

**Não Incluso**  
Funcionalidades mais avançadas de integração com outros sistemas de saúde e relatórios personalizados de saúde pública não serão abordadas nesta fase.

**Público-Alvo**  
O sistema é destinado a farmacêuticos e funcionários administrativos de UBS, que terão acesso a diferentes funcionalidades e permissões.

**Cenário de Validação**  
Para validar esta entrega, será demonstrado o fluxo completo de cadastro de medicamentos, incluindo categorias e fornecedores. Isso permitirá a criação de um inventário inicial de medicamentos e a consulta rápida de informações.

---

## 2. Definição do Processo e Ciclo de Vida do Desenvolvimento

**Escolha e Justificativa do Modelo de Desenvolvimento**  
O modelo escolhido será o **Ágil**, especificamente utilizando metodologias como o Scrum, com iterações curtas para possibilitar feedback constante e adaptações rápidas às necessidades. Esse modelo foi escolhido devido à necessidade de flexibilidade e adaptação ao longo do desenvolvimento, além de possibilitar entregas incrementais que agreguem valor ao usuário.

**Etapas e Atividades**
- **Planejamento**: 
  - Definir requisitos principais e funcionalidades essenciais do sistema.
  - Planejar backlog de tarefas no GitHub Projects.
- **Desenvolvimento**: 
  - Implementar CRUDs de Categorias, Fornecedores e Medicamentos.
  - Configurar banco de dados e integrar ferramentas de gerenciamento de dependências (Composer) e controle de versão (Git).
- **Teste**: 
  - Realizar testes unitários para validar o CRUD de medicamentos.
  - Testes de integração para garantir que o fluxo entre categorias e fornecedores está correto.
- **Entrega**: 
  - Configurar deploy automatizado para ambiente de teste.
  - Apresentar uma versão funcional para feedback.

**Papéis e Responsabilidades**  
- **Desenvolvedor**: Implementa os CRUDs e configurações de backend (Composer, integração com banco de dados), realiza testes e documenta funcionalidades.
- **Tester**: Define e executa casos de teste para os CRUDs e garante a cobertura básica de teste.
- **Gerente de Projeto**: Organiza as tarefas no GitHub Projects, revisa o progresso, e verifica se o projeto está alinhado com os objetivos iniciais.

**Artefatos de Entrada e Saída**  
- **Planejamento de Backlog**: Documento inicial com as funcionalidades principais e backlog.
- **Documentação de Requisitos**: Lista das funcionalidades definidas com base nas necessidades dos usuários.
- **Protótipo Funcional**: CRUDs implementados, sendo o artefato de saída para o processo de desenvolvimento.
- **Documentação de Testes**: Casos de teste com resultados esperados e obtidos.

---

## 3. Gestão de Mudanças e Evolução do Projeto

O controle de versão será feito no **Git**, onde cada funcionalidade e correção será registrada com commits claros, utilizando branches específicos para cada feature.  
Para o gerenciamento de mudanças e acompanhamento do progresso, será utilizado o **GitHub Projects** ou o **Trello**. As tarefas serão organizadas em quadros Kanban, com colunas para tarefas a fazer, em andamento e concluídas, para facilitar o acompanhamento. 

---

## 4. Prova de Conceito

Para a prova de conceito, será implementado o CRUD de **Categorias** e **Fornecedores**, com o seguinte fluxo básico:

1. **Configuração de Dependências e Controle de Versão**  
   - O Composer será usado para instalar as dependências do Laravel.
   - O Git será configurado com commits regulares, organizando as mudanças no código e facilitando o rastreamento de progresso.

2. **Desenvolvimento dos CRUDs**  
   - Implementação dos CRUDs de Categorias e Fornecedores.
   - Cada operação (Create, Read, Update, Delete) será realizada por meio de rotas específicas no Laravel.

3. **Automação**  
   - Utilização do **PHPUnit** para testes automatizados das operações básicas do CRUD.
   - Configuração do **GitHub Actions** para integração contínua, rodando testes a cada push para validar as funcionalidades.


