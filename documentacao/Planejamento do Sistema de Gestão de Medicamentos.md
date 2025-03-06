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
A validação desta entrega será feita por meio dos módulos de **CRUD para Categorias, Fornecedores e Medicamentos**:
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
   - Implementar CRUDs de Categorias e Fornecedores.
   - Configurar o banco de dados e integrar ferramentas de gerenciamento de dependências (Composer) e controle de versão (Git).
3. **Teste**:
   - Realizar testes unitários e manuais para validar os CRUDs.
4. **Entrega**:
   - Apresentar uma versão funcional para feedback e validação.

---

## Papéis e Responsabilidades

| **Quem (Papel)**          | **Com o quê (Artefato de Entrada)** | **Faz o quê (Atividade)**                          | **Para quê (Artefato de Saída)**                 |
|----------------------------|-------------------------------------|---------------------------------------------------|-------------------------------------------------|
| **Gerente de Projeto**     | Documentação de requisitos         | Organiza tarefas no Kanban e monitora o progresso | Kanban atualizado e entregas organizadas        |
| **Desenvolvedor**          | Requisitos e backlog               | Implementa os CRUDs de Categorias e Fornecedores  | Código-fonte funcional                          |
| **Tester**                 | Funcionalidades desenvolvidas      | Realiza testes unitários e manuais                | Relatórios de testes                            |


---

## Artefatos de Entrada e Saída

- **Planejamento de Backlog**: Documento inicial com as funcionalidades principais e backlog de tarefas.
- **Documentação de Requisitos**: Lista detalhada das funcionalidades definidas com base nas necessidades dos usuários.
- **Protótipo Funcional**: CRUDs implementados como artefato de saída do processo de desenvolvimento.
- **Documentação de Testes**: Casos de teste com resultados esperados e obtidos.

---

## 3. Gestão de Mudanças e Evolução do Projeto

Para organizar o desenvolvimento e acompanhar as alterações no sistema, utilizaremos:

1. **Git para Controle de Versão**:
   - Todas as alterações serão versionadas com commits regulares, organizados em branches específicas para cada funcionalidade. Isso permitirá rastrear o que foi feito e manter o histórico do projeto.

2. **GitHub Projects para Planejamento**:
   - As tarefas serão organizadas em um quadro Kanban simples, com colunas como "A Fazer", "Em Andamento" e "Concluído". Isso ajudará no acompanhamento do progresso e na priorização das entregas.

3. **Documentação Simples**:
   - Decisões e alterações importantes serão registradas no repositório (README), para que a equipe tenha clareza sobre o que foi implementado e o que ainda precisa ser feito.

Essas práticas garantem que o desenvolvimento seja organizado e que o sistema evolua de maneira controlada.

---

## Prova de Conceito

Nesta etapa inicial, focaremos na implementação de funcionalidades básicas, essenciais para validar o funcionamento do sistema. Serão desenvolvidos dois CRUDs:

1. **CRUD de Categorias**:
   - Permite criar, listar, atualizar e excluir categorias de medicamentos. Isso é fundamental para organizar o estoque e facilitar a localização de medicamentos.

2. **CRUD de Fornecedores**:
   - Permite registrar e consultar informações básicas dos fornecedores, como nome e contato. Essa funcionalidade assegura o controle dos parceiros responsáveis pelo fornecimento dos medicamentos.


### Validação
A prova de conceito será considerada bem-sucedida se:
- As operações de criação, leitura, atualização e exclusão em ambos os módulos funcionarem corretamente.
- O sistema apresentar organização e clareza, com as tabelas funcionando de maneira integrada ao banco de dados.


