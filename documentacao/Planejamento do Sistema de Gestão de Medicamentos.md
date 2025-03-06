# Planejamento do Sistema GerMED

# Contexto do Projeto (Escopo)

## Descrição do Produto
O sistema de gestão de medicamentos tem como objetivo principal melhorar o controle e a organização do estoque de medicamentos em Unidades Básicas de Saúde (UBS). Ele resolve problemas relacionados à rastreabilidade de medicamentos, controle de validade, gestão de fornecedores e registro de retiradas de medicamentos com base em receitas médicas.

## Escopo do Sistema

### O que será desenvolvido:
1. **Cadastro de Medicamentos**:
   - Registro de medicamentos com informações como nome, descrição, validade, categoria e fornecedor associado.
2. **Cadastro de Categorias**:
   - Classificação de medicamentos por tipo, uso ou outros critérios relevantes, permitindo organização prática e consultas rápidas.
3. **Cadastro de Fornecedores**:
   - Registro detalhado de fornecedores, incluindo informações de contato e histórico de fornecimento.
4. **Cadastro de Estoque**:
   - Monitoramento da validade dos medicamentos e alertas para produtos próximos ao vencimento.
5. **Retirada de Medicamentos**:
   - Controle das retiradas realizadas por funcionários e farmacêuticos, garantindo rastreabilidade e evitando desperdícios ou uso indevido.

### O que não será desenvolvido:
1. Funcionalidades avançadas, como:
   - Integração com sistemas externos.
   - Controle financeiro ou orçamentário.
   - Monitoramento de consumo individualizado por paciente.
   - Alertas automatizados via SMS ou email para pacientes.
   - Chatbot para suporte a usuários do sistema.
     

## Relevância
O sistema foi projetado para atender às necessidades de farmacêuticos e funcionários administrativos de UBS, promovendo:
- Melhor organização do estoque.
- Redução de desperdícios com medicamentos vencidos.
- Rastreabilidade confiável para controle interno.
- Facilidade na gestão de informações de fornecedores e medicamentos.
  

## Cenário de Validação
A validação desta entrega será feita por meio dos módulos de **CRUDs de Categorias, Fornecedores, Retiradas, Cadastro de Medicamentos e Estoque.**:
- **Medicamentos**: Possibilitará o cadastro básico de medicamentos com detalhes como nome, descrição, validade, categoria e fornecedor associado.
- **Categorias**: Garantirá a organização dos medicamentos, separando-os por critérios específicos e facilitando sua localização.
- **Fornecedores**: Permitirá o registro e consulta de informações sobre parceiros responsáveis pelo fornecimento dos medicamentos.
- **Estoque**: Permitirá o monitoramento da quantidade de medicamentos disponíveis, baixo estoque e próximos ao vencimento, garantindo um controle eficiente e evitando desperdícios.
-  **Retirada de Medicamentos**: Controlará a saída de medicamentos do estoque, registrando quem realizou a retirada, a quantidade retirada e o motivo, assegurando rastreabilidade e conformidade com as regras do sistema.

## 2. Definição do Processo e Ciclo de Vida do Desenvolvimento

### Escolha e Justificativa do Modelo de Desenvolvimento
O projeto será desenvolvido seguindo o Modelo Cascata, pois ele organiza o desenvolvimento em etapas bem definidas, o que facilita o planejamento e a execução.  

- **Passo a passo**: Cada fase precisa ser concluída antes de passar para a próxima, garantindo que tudo esteja bem estruturado.  
- **Menos bagunça**: Como tudo é planejado desde o início, fica mais fácil evitar mudanças inesperadas.  
- **Mais controle**: Seguir um fluxo linear ajuda a ter uma visão clara do progresso do projeto.  


### Etapas e Atividades
1. **Planejamento**:
   - Definir requisitos principais e funcionalidades essenciais do sistema.
   - Planejar o backlog de tarefas no GitHub Projects.
2. **Desenvolvimento**:
   - Implementar As funcionalidades do sistema como por exemplo os CRUDs de Categorias, Fornecedores, Retiradas, Cadastro de Medicamentos e Estoque.
   - Configurar o banco de dados e integrar ferramentas de gerenciamento de dependências (Composer) e controle de versão (Git).
3. **Teste**:
   - Realizar testes unitários e manuais para validar os CRUDs.
4. **Entrega**:
   - Apresentar uma versão funcional para feedback e validação.

---

## Papéis e Responsabilidades

A tabela abaixo descreve as responsabilidades de cada papel no projeto, os artefatos utilizados como entrada e os resultados gerados (artefatos de saída):

| **Papel**            | **Artefato de Entrada**       | **Atividade**                                      | **Artefato de Saída**                  |
|-----------------------|-------------------------------|----------------------------------------------------|----------------------------------------|
| **Gerente de Projeto** | Documentação de Requisitos    | Organiza tarefas no Kanban e monitora o progresso  | Kanban atualizado e entregas organizadas |
| **Desenvolvedor**      | Requisitos e Backlog          | Implementa as funcionalidades do sistema           | Código-fonte funcional                 |
| **Tester**             | Funcionalidades desenvolvidas | Realiza testes unitários e manuais                 | Relatórios de testes                   |

---

## Artefatos de Entrada e Saída

### Artefatos de Entrada
1. **Planejamento de Backlog**: Documento inicial que define as funcionalidades principais e o backlog de tarefas.
2. **Documentação de Requisitos**: Lista detalhada das funcionalidades, baseada nas necessidades dos usuários.
3. **Funcionalidades Desenvolvidas**: Código-fonte implementado pelos desenvolvedores, que serve como base para os testes.

### Artefatos de Saída
1. **Kanban Atualizado**: Ferramenta visual que reflete o progresso do projeto, atualizada pelo Gerente de Projeto.
2. **Código-fonte Funcional**: Resultado do trabalho dos desenvolvedores.
3. **Relatórios de Testes**: Documentação gerada pelo Tester, contendo os casos de teste e resultados.
4. **Protótipo Funcional**: Versão inicial do sistema com as funcionalidades básicas implementadas.
5. **Documentação de Testes**: Detalhamento dos testes realizados, incluindo critérios de aceitação e resultados.

---

## Fluxo de Trabalho

1. O **Gerente de Projeto** utiliza a **Documentação de Requisitos** para organizar as tarefas no Kanban e monitorar o progresso.
2. O **Desenvolvedor** recebe os **Requisitos e o Backlog** para implementar as funcionalidades, gerando **Código-fonte Funcional**.
3. O **Tester** utiliza as **Funcionalidades Desenvolvidas** para realizar testes, gerando **Relatórios de Testes**.

---

## 3. Gestão de Mudanças e Evolução do Projeto

Para organizar o desenvolvimento e acompanhar as alterações no sistema, utilizaremos:

1. **Git para Controle de Versão**:
   - Todas as alterações serão versionadas com commits regulares, organizados em branches específicas para cada funcionalidade. Isso permitirá rastrear o que foi feito e manter o histórico do projeto.

2. **GitHub Projects para Planejamento**:
   - As tarefas serão organizadas em um quadro Kanban simples, com colunas como "A Fazer", "Em Andamento" e "Concluído". Isso ajudará no acompanhamento do progresso e na priorização das entregas.

3. **Documentação Simples**:
   - Decisões e alterações importantes serão registradas no repositório (README), para que a equipe tenha clareza sobre o que foi implementado e o que ainda precisa ser feito.



